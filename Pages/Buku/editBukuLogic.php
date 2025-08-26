<?php
if ($_POST['proses']) {
    include "koneksi.php";
    $kode = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nisn = $_POST['nisn'];
    $stok_buku = $_POST['stok_buku'];
    $sql = "UPDATE tabel_buku SET judul_buku='$judul_buku', penulis_buku='$penulis_buku', penerbit_buku='$penerbit_buku', tahun_terbit = '$tahun_terbit', nisn = '$nisn', stok_buku ='$stok_buku' WHERE tabel_buku.id_buku='$kode'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script language='JavaScript'>
        document.location='index.php?page=daftarBuku';
        alert('Buku berhasil Dirubah');
    </script>";
    } else {
        echo " fail";
    }
}
?>