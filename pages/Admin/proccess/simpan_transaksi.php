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

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
        <script>
            alert('Data Berhasil Disimpan!Alhamdulillah');
            document.location.href = '../views/transaksi.php';
        </script>
    ";
    } else {
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

<?
// // ambil stok dulu ada brp
// $stok = mysqli_query($koneksi, "SELECT Stok from stok");
// $row = $stok->fetch_assoc();
// // kita kurangi ygy
// $stokSekarang = $row["Stok"] - $keluar;
// // kita update stok nya ygy
// $updateStok = mysqli_query($koneksi, "UPDATE stok SET Stok=$stokSekarang WHERE Kode_produk = $kode");