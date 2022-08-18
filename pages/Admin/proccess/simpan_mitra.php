<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";

if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
<?php }

$nama = $_POST['outlet'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

function cekNamaOutlet()
{
    global $koneksi, $nama;

    $sql = "SELECT * FROM mitra";
    $result = $koneksi->query($sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    foreach ($rows as $row) {
        if (strtolower($row['nama']) === strtolower($nama)) {
            return 1;
        } else {
            return -1;
        }
    }
}

if (cekNamaOutlet() > 0) {
    echo "
        <script>
            alert('Nama Outlet / Mitra sudah terpakai! Harap beri nama lain!');
            document.location.href = '../views/tambah_mitra.php';
        </script>
    ";
} else {
    $sql = "INSERT INTO mitra VALUES ('', '$nama', '$alamat', '$hp')";
    mysqli_query($koneksi, $sql);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
            <script>
                alert('Data Berhasil Disimpan!');
                document.location.href = '../views/mitra.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan!');
                document.location.href = '../views/mitra.php';
            </script>
        ";
    }
}
