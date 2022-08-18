<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";
if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
<?php }

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = $id");

if (mysqli_affected_rows($koneksi) > 0) {
	echo "
		<script>
			alert('Data Berhasil Dihapus!');
			document.location.href = '../views/produk.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data Gagal Dihapus!');
			document.location.href = '../views/produk.php';
		</script>
	";
}
