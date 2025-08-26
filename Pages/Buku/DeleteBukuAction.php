<?php
//Kode Menghapus Data terpilih
session_start();
    include "../../koneksi.php";
if(isset($_GET['id'])){
    $kode = $_GET['id'];
	$mySql	= "DELETE FROM tabel_buku WHERE id_buku='$kode'";
	$myQry	= mysqli_query($db, $mySql);
}
?>