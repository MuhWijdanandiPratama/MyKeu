<?php

require "../../../pages/koneksi.php";

// $kode_produk = $_GET['kode'];

// $sql = "SELECT Jenis_produk, id_kemasan, Harga_produk FROM produk WHERE Kode_produk=$kode_produk";

$id_produk = $_GET['id'];

$sql = "SELECT Kode_produk, Jenis_produk, id_kemasan, Harga_produk, Jumlah_produk, Tanggal_Expired FROM produk WHERE id_produk = $id_produk";

$result = mysqli_query($koneksi, $sql);
$row = $result->fetch_assoc();

// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['id']);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($jenis_produk);
// $stmt->fetch();
// $stmt->close();

// echo "<td>" . $cid . "</td>";

echo $row["Kode_produk"] . "~" . $row["Jenis_produk"] . "~" . $row["id_kemasan"] . "~" . $row["Harga_produk"] . "~" . $row["Jumlah_produk"] . "~" . $row['Tanggal_Expired'];

// echo array(
//     $row["Jenis_produk"],
//     $row["Jenis_kemasan"],
//     $row["Harga"]
// );
// echo var_dump($result);
// echo print_r($result);
