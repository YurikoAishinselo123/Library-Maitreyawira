<?php
if ($_POST['proses']) {
    include "../../koneksi.php";
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nisn = $_POST['nisn'];
    $stok = $_POST['stok'];
    $query = mysqli_query($db, "insert into tabel_buku(judul_buku, penulis_buku, penerbit_buku,
    tahun_terbit, nisn, stok_buku) values('$judul_buku', '$penulis_buku', '$penerbit_buku',
    '$tahun_terbit', '$nisn', '$stok')");
    if ($query) {
        echo"<script>alert('Data berhasil dimasukkan!);
        window.history.back();</script>";
    } else {
        echo" <script>alert('Data gagal dimasukkan!');
        window.history.back();</script>";
    }
}
?>
