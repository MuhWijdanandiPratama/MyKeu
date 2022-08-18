<?php

require "../../../pages/koneksi.php";


function kemitraan()
{
    global $koneksi;

    $sql = "SELECT COUNT(id_mitra) AS jml_mitra FROM mitra";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["jml_mitra"];
}

$jml_mitra = kemitraan();

function penghasilan_harian()
{
    global $koneksi;

    $sql = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_harian 
            FROM transaksi 
            WHERE tgl_transaksi = DATE(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["total_harian"];
}

function penghasilan_mingguan()
{
    global $koneksi;

    $sql = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_mingguan 
            FROM transaksi
            WHERE YEARWEEK(tgl_transaksi) = YEARWEEK(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["total_mingguan"];
}

function penghasilan_bulanan()
{
    global $koneksi;

    $sql = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulanan
            FROM transaksi
            WHERE MONTH(tgl_transaksi) = MONTH(NOW()) AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["total_bulanan"];
}

function penghasilan_tahunan()
{
    global $koneksi;

    $sql = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_tahunan 
            FROM transaksi 
            WHERE YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["total_tahunan"];
}

$penghasilanHarian = penghasilan_harian();
$penghasilanMingguan = penghasilan_mingguan();
$penghasilanBulanan = penghasilan_bulanan();
$penghasilanTahunan = penghasilan_tahunan();

function penghasilan_diagramBulanan()
{
    global $koneksi;

    $sql1 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan01 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 01 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql1);
    $row1 = $result->fetch_assoc();

    $sql2 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan02 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 02 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql2);
    $row2 = $result->fetch_assoc();

    $sql3 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan03 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 03 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql3);
    $row3 = $result->fetch_assoc();

    $sql4 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan04 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 04 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql4);
    $row4 = $result->fetch_assoc();

    $sql5 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan05 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 05 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql5);
    $row5 = $result->fetch_assoc();

    $sql6 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan06 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 06 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql6);
    $row6 = $result->fetch_assoc();

    $sql7 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan07 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 07 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql7);
    $row7 = $result->fetch_assoc();

    $sql8 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan08 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 08 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql8);
    $row8 = $result->fetch_assoc();

    $sql9 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan09 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 09 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql9);
    $row9 = $result->fetch_assoc();

    $sql10 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan10 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 10 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql10);
    $row10 = $result->fetch_assoc();

    $sql11 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan11 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 11 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql11);
    $row11 = $result->fetch_assoc();

    $sql12 = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS total_bulan12 
            FROM transaksi 
            WHERE MONTH(tgl_transaksi) = 12 AND YEAR(tgl_transaksi) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql12);
    $row12 = $result->fetch_assoc();


    $bulan = [
        $row1["total_bulan01"],
        $row2["total_bulan02"],
        $row3["total_bulan03"],
        $row4["total_bulan04"],
        $row5["total_bulan05"],
        $row5["total_bulan05"],
        $row7["total_bulan07"],
        $row8["total_bulan08"],
        $row9["total_bulan09"],
        $row10["total_bulan10"],
        $row11["total_bulan11"],
        $row12["total_bulan12"]
    ];

    return $bulan;
}

$penghasilan_diagramBulanan = penghasilan_diagramBulanan();

function total_penghasilan()
{
    global $koneksi;

    $sql = "SELECT transaksi.tgl_transaksi, SUM(transaksi.total) AS seluruh_penghasilan 
            FROM transaksi";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["seluruh_penghasilan"];
}

$total_penghasilan = total_penghasilan();

$penghasilanBulan01 = penghasilan_diagramBulanan()[0];
$penghasilanBulan02 = penghasilan_diagramBulanan()[1];
$penghasilanBulan03 = penghasilan_diagramBulanan()[2];
$penghasilanBulan04 = penghasilan_diagramBulanan()[3];
$penghasilanBulan05 = penghasilan_diagramBulanan()[4];
$penghasilanBulan06 = penghasilan_diagramBulanan()[5];
$penghasilanBulan07 = penghasilan_diagramBulanan()[6];
$penghasilanBulan08 = penghasilan_diagramBulanan()[7];
$penghasilanBulan09 = penghasilan_diagramBulanan()[8];
$penghasilanBulan10 = penghasilan_diagramBulanan()[9];
$penghasilanBulan11 = penghasilan_diagramBulanan()[10];
$penghasilanBulan12 = penghasilan_diagramBulanan()[11];


// semua data transaksi
function getAllPenghasilan()
{
    global $koneksi;

    $sql = "SELECT * FROM transaksi JOIN kemasan ON transaksi.id_kemasan = kemasan.id_kemasan";
    $result = mysqli_query($koneksi, $sql);
    $rows = []; // tempat kosong
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function getFilteredPenghasilan($tgl1, $tgl2)
{
    global $koneksi;

    $sql = "SELECT * FROM transaksi JOIN kemasan ON transaksi.id_kemasan = kemasan.id_kemasan";
    $result = mysqli_query($koneksi, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rowsWhile[] = $row;
    }

    foreach ($rowsWhile as $row) {
        if ($row["tgl_transaksi"] >= $tgl1 && $row["tgl_transaksi"] <= $tgl2) {
            $rows[] = $row;
        }
    }

    return $rows;
}
