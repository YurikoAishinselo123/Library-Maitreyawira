<?php
if ($_POST['proses']) {
    include "../../koneksi.php";
    $judul_anggota = $_POST['judul_anggota'];
    $penulis_anggota = $_POST['penulis_anggota'];
    $penerbit_anggota = $_POST['penerbit_anggota'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nisn = $_POST['nisn'];
    $stok = $_POST['stok'];
    $query = mysqli_query($db, "insert into tabel_anggota(judul_anggota, penulis_anggota, penerbit_anggota,
    tahun_terbit, nisn, stok_anggota) values('$judul_anggota', '$penulis_anggota', '$penerbit_anggota',
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
