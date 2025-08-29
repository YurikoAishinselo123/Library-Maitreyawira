<?php
include "koneksi.php";
    $kode = $_POST['id_transaksi'];
    $id_buku = $_POST['id_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $status_transaksi = $_POST['status_transaksi'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    $sql = "UPDATE tabel_transaksi SET tanggal_peminjaman='$tanggal_peminjaman', status_transaksi='$status_transaksi', tanggal_pengembalian = '$tanggal_pengembalian' WHERE tabel_transaksi.id_transaksi='$kode'";
    $sql2 = "UPDATE tabel_buku set stok_buku = stok_buku+1 WHERE tabel_buku.id_buku = '$id_buku'";

    $query = mysqli_query($db, $sql);
    $queryEditBuku = mysqli_query($db, $sql2);
    if($status_transaksi = "Dikembalikan"){
        if ($query) {
        echo "<script>
            alert('buku berhasil ditambahkan!');
        </script>";

        } else {
            die("Query Error: " . mysqli_error($db));
        }
    }
    if ($query) {
        echo "<script>
            alert('Transaksi berhasil ditambahkan!');
            window.location='index.php?page=daftarTransaksi';
        </script>";
    } else {
        die("Query Error: " . mysqli_error($db));
    }

?>