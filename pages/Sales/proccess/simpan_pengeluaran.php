<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";

if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
<?php }

$pengeluaran = $_POST['pengeluaran'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO pengeluaran VALUES(null, '$pengeluaran', '$keterangan', '$tanggal' )";
$result = mysqli_query($koneksi, $sql);

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
        <script>
            alert('Data Berhasil Disimpan!');
            document.location.href = '../views/tabel_pengeluaran.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan!');
            document.location.href = '../views/tabel_pengeluaran.php';
        </script>
    ";
}

?>