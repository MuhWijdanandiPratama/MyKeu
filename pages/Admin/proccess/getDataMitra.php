<?php
require "../../../pages/koneksi.php";

$id_mitra = $_GET['id'];

$sql = "SELECT * FROM mitra WHERE id_mitra = $id_mitra";

$result = mysqli_query($koneksi, $sql);
$row = $result->fetch_assoc();

echo $row["alamat"] . "~" . $row["no_hp"];
