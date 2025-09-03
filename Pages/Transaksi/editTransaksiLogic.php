<?php
if (isset($_POST['proses'])) {
    include "koneksi.php";

    $kode = $_POST['id_transaksi'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $status_transaksi = $_POST['status_transaksi'];
    $id_buku = $_POST['id_buku'];

    if ($tanggal_pengembalian < $tanggal_peminjaman) {
        echo "<script>
                alert('Tanggal pengembalian tidak boleh lebih kecil dari tanggal peminjaman!');
                window.location='index.php?page=editTransaksi&id=$kode';
              </script>";
        exit;
    }

    mysqli_begin_transaction($db);

    $sql = "UPDATE tabel_transaksi 
            SET tanggal_peminjaman=?, tanggal_pengembalian=?, status_transaksi=? 
            WHERE id_transaksi=?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $tanggal_peminjaman, $tanggal_pengembalian, $status_transaksi, $kode);
    $query = mysqli_stmt_execute($stmt);

    $queryEditBuku = true;
    if ($status_transaksi === "Di kembalikan") {
        $sql2 = "UPDATE tabel_buku SET stok_buku = stok_buku + 1 WHERE id_buku=?";
        $stmt2 = mysqli_prepare($db, $sql2);
        mysqli_stmt_bind_param($stmt2, "i", $id_buku);
        $queryEditBuku = mysqli_stmt_execute($stmt2);
    }

    if ($query && $queryEditBuku) {
        mysqli_commit($db);
        echo "<script>
            alert('Transaksi berhasil diperbarui!');
            window.location='index.php?page=daftarTransaksi';
        </script>";
    } else {
        mysqli_rollback($db);
        die("Gagal update: " . mysqli_error($db));
    }
}
?>