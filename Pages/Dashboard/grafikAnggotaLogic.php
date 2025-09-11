<?php
include "koneksi.php";

$sql = "SELECT MONTH(tanggal_peminjaman) AS bulan, COUNT(*) AS total
        FROM tabel_transaksi
        WHERE YEAR(tanggal_peminjaman) = YEAR(CURDATE())
        GROUP BY MONTH(tanggal_peminjaman)";
$query = mysqli_query($db, $sql);

$bulan = [];
$total = [];

while ($row = mysqli_fetch_assoc($query)) {
    $bulan[] = date("F", mktime(0, 0, 0, $row['bulan'], 1));
    $total[] = $row['total'];
}

$sqlLaki = "SELECT COUNT(*) as totalLaki FROM tabel_anggota WHERE jenis_kelamin='Laki-laki'";
$resLaki = mysqli_query($db, $sqlLaki);
$rowLaki = mysqli_fetch_assoc($resLaki);
$totalLaki = $rowLaki['totalLaki'] ?? 0;

$sqlPerempuan = "SELECT COUNT(*) as totalPerempuan FROM tabel_anggota WHERE jenis_kelamin='Perempuan'";
$resPerempuan = mysqli_query($db, $sqlPerempuan);
$rowPerempuan = mysqli_fetch_assoc($resPerempuan);
$totalPerempuan = $rowPerempuan['totalPerempuan'] ?? 0;
?>