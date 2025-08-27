<?php
include "koneksi.php";
$kode = $_GET['id'];
$mySql = "DELETE FROM tabel_transaksi WHERE id_transaksi='$kode'";
$myQry = mysqli_query($db, $mySql);
if ($myQry) {
    echo "<Script language='JavaScript'>
    alert('Anggota Berhasil Dihapus!');
    document.location='index.php?page=daftarAnggota';
    </script>";
}
?>