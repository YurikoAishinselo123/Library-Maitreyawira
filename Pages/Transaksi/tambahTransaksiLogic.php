<?php
include "koneksi.php";

$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$id_buku = $_POST['id_buku'];
$id_anggota = $_POST['id_anggota'];
$status_transaksi = $_POST['status_transaksi'];
$tanggal_pengembalian = "NULL";

$today = date("Y-m-d");
if ($tanggal_peminjaman > $today) {
    echo "<script>
            alert('Tanggal peminjaman tidak boleh lebih dari hari ini!');
            window.location='index.php?page=tambahTransaksi';
          </script>";
    exit;
}

$sqlCheck = "SELECT stok_buku FROM tabel_buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($db, $sqlCheck);
$row = mysqli_fetch_assoc($result);

if (!$row || $row['stok_buku'] <= 0) {
    echo "<script>
            alert('Stok buku kosong, transaksi tidak dapat diproses!');
            window.location='index.php?page=tambahTransaksi';
          </script>";
    exit;
}

$sql = "INSERT INTO tabel_transaksi 
        (tanggal_peminjaman, id_buku, id_anggota, status_transaksi, tanggal_pengembalian) 
        VALUES 
        ('$tanggal_peminjaman', '$id_buku', '$id_anggota', '$status_transaksi', $tanggal_pengembalian)";

$sql2 = "UPDATE tabel_buku SET stok_buku = stok_buku-1 WHERE id_buku = '$id_buku'";

mysqli_begin_transaction($db);

$query_input = mysqli_query($db, $sql);
$query_editStok = mysqli_query($db, $sql2);

if ($query_input && $query_editStok) {
    mysqli_commit($db);
    echo "<script>
            alert('Transaksi berhasil ditambahkan!');
            window.location='index.php?page=daftarTransaksi';
          </script>";
} else {
    mysqli_rollback($db);
    die("Query Error: " . mysqli_error($db));
}
?>