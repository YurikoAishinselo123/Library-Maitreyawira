<?php
include "koneksi.php";
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $id_buku = $_POST['id_buku'];
    $id_anggota = $_POST['id_anggota'];
    $status_transaksi = $_POST['status_transaksi'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    $sql = "INSERT INTO tabel_transaksi (tanggal_peminjaman, id_buku, id_anggota, status_transaksi, tanggal_pengembalian) 
            VALUES ('$tanggal_peminjaman', '$id_buku', '$id_anggota', '$status_transaksi', '$tanggal_pengembalian')";
    $sql2 = "UPDATE tabel_buku set stok_buku = stok_buku-1 WHERE tabel_buku.id_buku = '$id_buku'";

    $query_input = mysqli_query($db, $sql);
    $query_editStok = mysqli_query($db,$sql2);

    if ($query_input) {
        if($query_editStok){
            echo "<script>
            alert('Transaksi berhasil ditambahkan!');
            window.location='index.php?page=daftarTransaksi';
        </script>";
        } else {
            die("Query Error: " . mysqli_error($db));
        }
    } else {
        die("Query Error: " . mysqli_error($db));
    }

?>