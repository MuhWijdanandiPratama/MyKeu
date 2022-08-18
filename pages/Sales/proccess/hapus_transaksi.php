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

mysqli_query($koneksi, "DELETE FROM transaksi WHERE Id_transaksi = $id");

if (mysqli_affected_rows($koneksi) > 0) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../views/transaksi.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../views/transaksi.php';
		</script>
	";
}
