<?php
include "koneksi.php";
    $kode = $_POST['id_transaksi'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $status_transaksi = $_POST['status_transaksi'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    $sql = "UPDATE tabel_transaksi SET tanggal_peminjaman='$tanggal_peminjaman', status_transaksi='$status_transaksi', tanggal_pengembalian = '$tanggal_pengembalian' WHERE tabel_transaksi.id_transaksi='$kode'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>
            alert('Transaksi berhasil ditambahkan!');
            window.location='index.php?page=daftarTransaksi';
        </script>";
    } else {
        die("Query Error: " . mysqli_error($db));
    }

?>