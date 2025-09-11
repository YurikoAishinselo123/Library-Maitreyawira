<?php
include "koneksi.php";

// Total Buku
$sqlBuku = "SELECT COUNT(*) as totalBuku FROM tabel_buku";
$resBuku = mysqli_query($db, $sqlBuku);
$rowBuku = mysqli_fetch_assoc($resBuku);
$totalBuku = $rowBuku['totalBuku'] ?? 0;

// Total Anggota
$sqlAnggota = "SELECT COUNT(*) as totalAnggota FROM tabel_anggota";
$resAnggota = mysqli_query($db, $sqlAnggota);
$rowAnggota = mysqli_fetch_assoc($resAnggota);
$totalAnggota = $rowAnggota['totalAnggota'] ?? 0;

// Buku dipinjam (status = 'Dipinjam')
$sqlDipinjam = "SELECT COUNT(*) as totalDipinjam FROM tabel_transaksi WHERE status_transaksi='Dipinjam'";
$resDipinjam = mysqli_query($db, $sqlDipinjam);
$rowDipinjam = mysqli_fetch_assoc($resDipinjam);
$totalDipinjam = $rowDipinjam['totalDipinjam'] ?? 0;

// Buku dikembalikan (status = 'Dikembalikan')
$sqlKembali = "SELECT COUNT(*) as totalKembali FROM tabel_transaksi WHERE status_transaksi='Dikembalikan'";
$resKembali = mysqli_query($db, $sqlKembali);
$rowKembali = mysqli_fetch_assoc($resKembali);
$totalKembali = $rowKembali['totalKembali'] ?? 0;
