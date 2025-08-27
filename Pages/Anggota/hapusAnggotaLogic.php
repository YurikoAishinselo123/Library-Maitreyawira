<?php
include "koneksi.php";
$kode = $_GET['id'];
$mySql = "DELETE FROM tabel_anggota WHERE id_anggota='$kode'";
$myQry = mysqli_query($db, $mySql);
if ($myQry) {
    echo "<Script language='JavaScript'>
    alert('Anggota Berhasil Dihapus!');
    document.location='index.php?page=daftarAnggota';
    </script>";
}
?>