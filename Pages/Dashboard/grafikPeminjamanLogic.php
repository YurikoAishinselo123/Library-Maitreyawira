<?php
include "koneksi.php";

$sqlChart = "SELECT MONTH(tanggal_peminjaman) AS bulan, COUNT(*) AS total
             FROM tabel_transaksi
             WHERE YEAR(tanggal_peminjaman) = YEAR(CURDATE())
             GROUP BY MONTH(tanggal_peminjaman)";
$resChart = mysqli_query($db, $sqlChart);

$bulan = [];
$total = [];

while ($row = mysqli_fetch_assoc($resChart)) {
    $bulan[] = date("F", mktime(0, 0, 0, $row['bulan'], 1));
    $total[] = $row['total'];
}
