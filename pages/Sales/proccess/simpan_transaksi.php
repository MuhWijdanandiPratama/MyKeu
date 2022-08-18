<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";

if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
    <?php }

$id = $_POST['id_produk'];
$kode = $_POST['kode'];
$jenis = $_POST['jenis'];
$kemasan = $_POST['kemasan'];
$harga = $_POST['harga'];
$keluar = $_POST['keluar'];
$total = $_POST['total'];
$outlet = $_POST['outlet'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$tgl_transaksi = Date('Y-m-d');
$tgl_expired = $_POST['tgl_expired'];
$status = '1';

// function countdownTimerIndoneisa()
// {
//     $date = date_create_from_format("Y-m-d", "2022-08-28", new DateTimeZone("Asia/Jakarta"));
//     // var_dump($date);
//     $expired = strtotime("2022-08-28") - 14400;
//     $distance = $expired - time();
//     var_dump($distance);
//     // $days = floor($distance / (60 * 60 * 24)); // here the brackets
//     // $hours = floor(($distance - ($days * 60 * 60 * 24)) / (60 * 60)); // and here too

//     $days = floor($distance / 3600 / 24);
//     $hours = floor($distance / 3600) % 24;
//     $minutes = floor($distance / 60) % 60;
//     $seconds = floor($distance) % 60;

//     echo "$days : $hours : $minutes : $seconds";

//     // cara dapat days hours minutes seconds
//     // https://stackoverflow.com/questions/8273804/convert-seconds-into-days-hours-minutes-and-seconds
// }

// cek tgl_expired nya
function cekExpired($tgl_expired)
{
    $today = date("Y-m-d");
    if ($tgl_expired === $today) {
        return 1;
    } else {
        return -1;
    }
}

// convert kemasannya
function idKemasan($kemasan)
{
    if ($kemasan == 'A') {
        $kemasan = 1;
    } else if ($kemasan == 'B') {
        $kemasan = 2;
    } else if ($kemasan == 'C') {
        $kemasan = 3;
    } else if ($kemasan == 'D') {
        $kemasan = 4;
    } else if ($kemasan == 'E') {
        $kemasan = 5;
    } else if ($kemasan == 'F') {
        $kemasan = 6;
    } else if ($kemasan == 'Au') {
        $kemasan = 7;
    } else if ($kemasan == 'Bu') {
        $kemasan = 8;
    } else if ($kemasan == 'Cu') {
        $kemasan = 9;
    } else if ($kemasan == 'Du') {
        $kemasan = 10;
    } else {
        return false;
    }
    return $kemasan;
}

function getNamaOutlet($outlet)
{
    global $koneksi;

    $result = mysqli_query($koneksi, "SELECT id_mitra, nama FROM mitra WHERE id_mitra = '$outlet'");
    $row = $result->fetch_assoc();
    return $row["nama"];
}

$namaOutlet = getNamaOutlet($outlet);

if (cekExpired($tgl_expired) < 0) {
    // ambil jumlah produknya dulu
    $result = mysqli_query($koneksi, "SELECT id_produk, kode_produk, Jenis_produk, id_kemasan, Jumlah_produk FROM produk WHERE id_produk = '$id'");
    $row = $result->fetch_assoc();
    $id_produk = $row["id_produk"];
    // kita kurangi dengan keluar
    $jmlProdukBaru = $row["Jumlah_produk"] - $keluar;
    // update jumlah_produknya
    $updateJmlProduk = mysqli_query($koneksi, "UPDATE produk SET Jumlah_produk = '$jmlProdukBaru' WHERE id_produk = '$id_produk'");

    $idKemasan = idKemasan($kemasan);

    $query = "INSERT INTO transaksi VALUES ('','$kode','$jenis','$idKemasan','$harga','$keluar','$total','$namaOutlet','$alamat','$hp','$status', '$tgl_transaksi')";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) { ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
            <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
            <title>
                STRUK TRANSAKSI
            </title>
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
            <!-- Nucleo Icons -->
            <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
            <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
            <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
            <!-- CSS Files -->
            <link id="pagestyle" href="../../../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
            <style>
                .center {
                    margin: 0 auto;
                }
            </style>
        </head>


        <body onload="window.print(); window.onafterprint = function(event) {window.location.href = '../views/transaksi.php'}" class="g-sidenav-show bg-gray-100">
            <div class="min-height-300 bg-primary position-absolute w-100"></div>
            <main class="main-content position-relative border-radius-lg ">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6 class="text-center">STRUK TRANSAKSI</h6>
                                    <h6 class="text-center">
                                        <?php
                                        date_default_timezone_set("Asia/Jakarta");
                                        echo date("h:i:sa") . " " . date("d-M-Y");
                                        ?>
                                    </h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="align-items-center mb-0 center" width="300px">
                                            <thead>
                                                <tr>
                                                    <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Produk</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="text-start text-right text-sm">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?= $jenis ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kemasan</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="align-middle text-right text-sm">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?= $kemasan ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Transaksi</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="align-middle text-right text-sm">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?= $keluar ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="align-middle text-right text-sm">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            Rp<?= number_format($harga, 2, ',', '.') ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="align-middle text-right text-sm">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            Rp<?= number_format($total, 2, ',', '.') ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Outlet</th>
                                                    <td class="text-end text-right text-sm">: </td>
                                                    <td class="align-middle text-right">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?= $namaOutlet ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer pt-3  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        © <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </main>
            <!--   Core JS Files   -->
            <script src="../../../assets/js/core/popper.min.js"></script>
            <script src="../../../assets/js/core/bootstrap.min.js"></script>
            <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
            <script>
                var win = navigator.platform.indexOf('Win') > -1;
                if (win && document.querySelector('#sidenav-scrollbar')) {
                    var options = {
                        damping: '0.5'
                    }
                    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                }
            </script>
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../../../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
        </body>

        </html>
<?php } else {
        echo "
        <script>
            alert('Data Gagal Disimpan!');
            document.location.href = '../views/transaksi.php';
        </script>
    ";
    }
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan! Produk telah expired!');
            document.location.href = '../views/transaksi.php';
        </script>
    ";
}

?>
<script type="text/javascript">
    // alert('Data Sudah Tersimpan');
    // window.location.assign('../views/transaksi.php');
</script>