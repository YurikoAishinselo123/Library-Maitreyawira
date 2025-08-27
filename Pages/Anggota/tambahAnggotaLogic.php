<?php
if (isset($_POST['proses'])) {
    include "koneksi.php";


    $nama_anggota = $_POST['nama_anggota'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $NIS = $_POST['NIS'];

    $sql = "INSERT INTO tabel_anggota (nama_anggota, tanggal_lahir, jenis_kelamin, NIS) 
            VALUES ('$nama_anggota', '$tanggal_lahir', '$jenis_kelamin', '$NIS')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>
            alert('Anggota berhasil ditambahkan!');
            window.location='index.php?page=daftarAnggota';
        </script>";
    } else {
        die("Query Error: " . mysqli_error($db));
    }
}
?>