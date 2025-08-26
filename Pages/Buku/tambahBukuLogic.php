<?php
if (isset($_POST['proses'])) {
    include "koneksi.php";

    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $nisn = $_POST['nisn'];
    $stok_buku = $_POST['stok_buku'];

    $sql = "INSERT INTO tabel_buku (judul_buku, penulis_buku, penerbit_buku, tahun_terbit, nisn, stok_buku) 
            VALUES ('$judul_buku', '$penulis_buku', '$penerbit_buku', '$tahun_terbit', '$nisn', '$stok_buku')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>
            alert('Buku berhasil ditambahkan!');
            window.location='index.php?page=daftarBuku';
        </script>";
    } else {
        die("Query Error: " . mysqli_error($db));
    }
}
?>