<?php
if ($_POST['proses']) {
    include "../../koneksi.php";
    $nama_anggota = $_POST['nama_anggota'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nis = $_POST['NIS'];
    $query = mysqli_query($db, "insert into tabel_anggota(nama_anggota, tanggal_lahir, jenis_kelamin,
    NIS) values('$nama_anggota', '$tanggal_lahir', '$jenis_kelamin', '$nis')");
    if ($query) {
        echo"<script>alert('Data berhasil dimasukkan!);        
        window.history.back();</script>";
    } else {
        echo" <script>alert('Data gagal dimasukkan!');        
        window.history.back();</script>";
    }
}
?>
