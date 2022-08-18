<?php

require "../../../pages/session.php";
require "../../../pages/koneksi.php";

if (empty($_SESSION['username'])) { ?>
    <script type="text/javascript">
        alert('Harap Login Terlebih Dahulu!');
        window.location.assign('../../../pages/sign-in.php');
    </script>
<?php }

$id = $_POST['Id'];
$password = $_POST['password'];
$role = $_POST['Role'];
$email = $_POST['email'];
$username = $_POST['username'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$alamat = $_POST['Alamat'];
$kota = $_POST['Kota'];
$negara = $_POST['Negara'];
$pos = $_POST['Kode_pos'];

$query = "UPDATE user SET username = '$username', password = '$password', email = '$email', first_name = '$first', last_name = '$last', Alamat = '$alamat', Kota = '$kota', Negara = '$negara', Kode_pos = '$pos' WHERE Id = $id";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
            <script>
                alert('Data Berhasil Disimpan!');
                document.location.href = '../views/profile.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan!');
                document.location.href = '../views/profile.php';
            </script>
        ";
    }