<?php
include "koneksi.php";
$kode = $_GET['id'];
$mySql = "DELETE FROM tabel_buku WHERE id_buku='$kode'";
$myQry = mysqli_query($db, $mySql);
if ($myQry) {
    echo "<Script language='JavaScript'>
    alert('Buku Berhasil Dihapus!');
    document.location='index.php?page=daftarBuku';
    </script>";
}
?>