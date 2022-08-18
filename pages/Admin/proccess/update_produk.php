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
$rasa = $_POST['rasa'];
$jumlah = $_POST['jumlah'];
$tgl_pro = $_POST['tanggal_produksi'];
$tgl_exp = $_POST['tanggal_expired'];
$netto = $_POST['netto'];

$query = "UPDATE produk SET Rasa = '$rasa', Jumlah_produk = '$jumlah', Tanggal_Produksi = '$tgl_pro', Tanggal_Expired = '$tgl_exp', Netto = '$netto' WHERE id_produk = $id";
mysqli_query($koneksi, $query);

if (mysqli_affected_rows($koneksi) > 0) {
	echo "
		<script>
			alert('Data Berhasil Diedit!');
			document.location.href = '../views/produk.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data Gagal Diedit!');
			document.location.href = '../views/produk.php';
		</script>
	";
}





// function operasi($jumlah, $jml_produksi)
// {
//     if ($jml_produksi > $jumlah) {
//         return '-';
//     } else {
//         return '+';
//     }
// }

// // mengambil data dari tb produk
// $selectProduk =  "SELECT id_produk, Jumlah_produksi FROM produk WHERE id_produk = '$id'";
// $result = mysqli_query($koneksi, $selectProduk);
// $row = $result->fetch_assoc();
// $id_produk = $row['id_produk'];
// $jml_produksi = $row['Jumlah_produksi'];
// var_dump($id_produk);
// var_dump($jml_produksi);
// echo '/n';


// // ambil data stok
// $selectStok = "SELECT id, id_produk, id_kemasan, Stok FROM stok WHERE id_produk = '$id'";
// $result = mysqli_query($koneksi, $selectStok);
// $row = $result->fetch_assoc();

// $id_produk = $row['id_produk'];
// $id_kemasan = $row['id_kemasan'];
// $stok = $row['Stok'];

// var_dump($id_produk);
// var_dump($id_kemasan);
// var_dump($stok);


// // convert to int
// $intJumlah = (int) $jumlah;
// $intJml_produksi = (int) $jml_produksi;

// $stokBaru;
// $operasi = operasi($intJumlah, $intJml_produksi);
// if ($operasi === '-') {
//     $selisih = $intJml_produksi - $intJumlah;
//     $stokBaru = $stok - $selisih;
// } else {
//     $selisih = $intJumlah - $intJml_produksi;
//     $stokBaru = $stok + $selisih;
// }


// echo '/n/n';

// var_dump($selisih);
// var_dump($stokBaru);

// die;
