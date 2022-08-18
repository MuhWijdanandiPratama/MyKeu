<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";

if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
<?php }

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$kemasan = $_POST['kemasan'];
$rasa = $_POST['rasa'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$tgl_produksi = $_POST['tanggal_produksi'];
$code = explode('-', $tgl_produksi);
$prd = implode("", $code);
$kode = $id . $prd;
$tgl_expired = $_POST['tanggal_expired'];
$netto = $_POST['netto'];

// function updateStok($id, $jumlah)
// {
//     global $koneksi;

//     // get banyaknya stok yang tersedia
//     $query = "SELECT id_produk, id_kemasan, Stok FROM stok WHERE id_produk = $id";
//     $result = mysqli_query($koneksi, $query);
//     while ($row = $result->fetch_assoc()) {
//         $intJumlah = (int) $jumlah;
//         $intStok = (int) $row['Stok'];
//         $stokBaru = $intJumlah + $intStok;

//         // update stoknya
//         $query = "UPDATE stok SET Stok = $stokBaru WHERE id_produk = $id";
//         mysqli_query($koneksi, $query);

//         // $query2 = "UPDATE produk SET Jumlah_produksi = '$stokBaru' WHERE id_produk = $id";
//         // mysqli_query($koneksi, $query2);

//         return mysqli_affected_rows($koneksi);
//     }
// }

function updateJmlProduk($id, $jumlah)
{
    global $koneksi;

    // get banyaknya stok yang tersedia
    $query = "SELECT id_produk, id_kemasan, Jumlah_produk FROM produk WHERE id_produk = $id";
    $result = mysqli_query($koneksi, $query);
    while ($row = $result->fetch_assoc()) {
        $intJumlah = (int) $jumlah;
        $intJmlProduk = (int) $row['Jumlah_produk'];
        $jmlProdukBaru = $intJumlah + $intJmlProduk;

        // update stoknya
        $query = "UPDATE produk SET Jumlah_produk = $jmlProdukBaru WHERE id_produk = $id";
        mysqli_query($koneksi, $query);
    }

    return mysqli_affected_rows($koneksi);
}

function validasi($jenis, $kemasan, $jumlah)
{
    global $koneksi;

    $query = "SELECT id_produk, Jenis_produk, id_kemasan FROM produk";
    $result = mysqli_query($koneksi, $query);
    while ($row = $result->fetch_assoc()) {
        if ($row['Jenis_produk'] === $jenis) {
            if ($row['id_kemasan'] == $kemasan) {
                $id_produkya = $row['id_produk'];

                if (updateJmlProduk($id_produkya, $jumlah) > 0) {
                    return '1';
                } else {
                    return '2';
                }
            }
        }
    }
}

$validasi = validasi($jenis, $kemasan, $jumlah);

switch ($validasi) {
    case '1':
        echo "
            <script>
                alert('Data Berhasil Diupdate! Jenis Produk dan Jenis Kemasan telah terdata! Jumlah produk telah diperbarui.');
                document.location.href = '../views/produk.php';
            </script>
        ";
        break;
    case '2':
        echo "
            <script>
                alert('data gagal disimpan!');
                document.location.href = '../views/produk.php';
            </script>
        ";
        break;
    default:
        $query1 = "INSERT INTO produk VALUES ('$id','$kode','$jenis','$kemasan','$rasa','$harga','$jumlah','$tgl_produksi','$tgl_expired','$netto')";
        mysqli_query($koneksi, $query1);

        if (mysqli_affected_rows($koneksi) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Disimpan!');
                    document.location.href = '../views/produk.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Disimpan!');
                    document.location.href = '../views/produk.php';
                </script>
            ";
        }
}


?>
<script type="text/javascript">
    // alert('Data Sudah Tersimpan');
    // window.location.assign('../views/produk.php');
</script>