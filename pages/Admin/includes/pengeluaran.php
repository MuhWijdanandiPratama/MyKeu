<?php

require "../../../pages/koneksi.php";

function pengeluaran_harian()
{
    global $koneksi;

    $sql = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_harian 
            FROM pengeluaran 
            WHERE tgl_pengeluaran = DATE(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["pengeluaran_harian"];
}

function pengeluaran_mingguan()
{
    global $koneksi;

    $sql = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_mingguan 
            FROM pengeluaran
            WHERE YEARWEEK(tgl_pengeluaran) = YEARWEEK(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["pengeluaran_mingguan"];
}

function pengeluaran_bulanan()
{
    global $koneksi;

    $sql = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulanan
            FROM pengeluaran
            WHERE MONTH(tgl_pengeluaran) = MONTH(NOW()) AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["pengeluaran_bulanan"];
}

function pengeluaran_tahunan()
{
    global $koneksi;

    $sql = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_tahunan 
            FROM pengeluaran 
            WHERE YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["pengeluaran_tahunan"];
}

$pengeluaranHarian = pengeluaran_harian();
$pengeluaranMingguan = pengeluaran_mingguan();
$pengeluaranBulanan = pengeluaran_bulanan();
$pengeluaranTahunan = pengeluaran_tahunan();

function pengeluaran_diagramBulanan()
{
    global $koneksi;

    $sql1 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan01 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 01 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql1);
    $row1 = $result->fetch_assoc();

    $sql2 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan02 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 02 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql2);
    $row2 = $result->fetch_assoc();

    $sql3 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan03 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 03 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql3);
    $row3 = $result->fetch_assoc();

    $sql4 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan04 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 04 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql4);
    $row4 = $result->fetch_assoc();

    $sql5 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan05 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 05 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql5);
    $row5 = $result->fetch_assoc();

    $sql6 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan06 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 06 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql6);
    $row6 = $result->fetch_assoc();

    $sql7 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan07 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 07 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql7);
    $row7 = $result->fetch_assoc();

    $sql8 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan08 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 08 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql8);
    $row8 = $result->fetch_assoc();

    $sql9 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan09 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 09 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql9);
    $row9 = $result->fetch_assoc();

    $sql10 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan10 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 10 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql10);
    $row10 = $result->fetch_assoc();

    $sql11 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan11 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 11 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql11);
    $row11 = $result->fetch_assoc();

    $sql12 = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS pengeluaran_bulan12 
            FROM pengeluaran 
            WHERE MONTH(tgl_pengeluaran) = 12 AND YEAR(tgl_pengeluaran) = YEAR(NOW())";
    $result = mysqli_query($koneksi, $sql12);
    $row12 = $result->fetch_assoc();


    $bulan = [
        $row1["pengeluaran_bulan01"],
        $row2["pengeluaran_bulan02"],
        $row3["pengeluaran_bulan03"],
        $row4["pengeluaran_bulan04"],
        $row5["pengeluaran_bulan05"],
        $row5["pengeluaran_bulan05"],
        $row7["pengeluaran_bulan07"],
        $row8["pengeluaran_bulan08"],
        $row9["pengeluaran_bulan09"],
        $row10["pengeluaran_bulan10"],
        $row11["pengeluaran_bulan11"],
        $row12["pengeluaran_bulan12"]
    ];

    return $bulan;
}

$pengeluaran_diagramBulanan = pengeluaran_diagramBulanan();

function total_pengeluaran()
{
    global $koneksi;

    $sql = "SELECT pengeluaran.tgl_pengeluaran, SUM(pengeluaran.pengeluaran) AS seluruh_pengeluaran 
            FROM pengeluaran";
    $result = mysqli_query($koneksi, $sql);
    $row = $result->fetch_assoc();

    return $row["seluruh_pengeluaran"];
}

$total_pengeluaran = total_pengeluaran();


$pengeluaranBulan01 = pengeluaran_diagramBulanan()[0];
$pengeluaranBulan02 = pengeluaran_diagramBulanan()[1];
$pengeluaranBulan03 = pengeluaran_diagramBulanan()[2];
$pengeluaranBulan04 = pengeluaran_diagramBulanan()[3];
$pengeluaranBulan05 = pengeluaran_diagramBulanan()[4];
$pengeluaranBulan06 = pengeluaran_diagramBulanan()[5];
$pengeluaranBulan07 = pengeluaran_diagramBulanan()[6];
$pengeluaranBulan08 = pengeluaran_diagramBulanan()[7];
$pengeluaranBulan09 = pengeluaran_diagramBulanan()[8];
$pengeluaranBulan10 = pengeluaran_diagramBulanan()[9];
$pengeluaranBulan11 = pengeluaran_diagramBulanan()[10];
$pengeluaranBulan12 = pengeluaran_diagramBulanan()[11];

// semua data pengeluaran
function getAllPengeluaran()
{
    global $koneksi;

    $sql = "SELECT * FROM pengeluaran";
    $result = mysqli_query($koneksi, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function getFilteredPengeluaran($tgl1, $tgl2)
{
    global $koneksi;

    $sql = "SELECT * FROM pengeluaran WHERE tgl_pengeluaran BETWEEN '$tgl1' AND '$tgl2'";
    $result = mysqli_query($koneksi, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    // foreach ($rowsWhile as $row) {
    //     if ($row["tgl_pengeluaran"] >= $tgl1 && $row["tgl_pengeluaran"] <= $tgl2) {
    //         $rows[] = $row;
    //     }
    // }

    return $rows;
}
