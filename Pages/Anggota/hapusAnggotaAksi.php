<?php
//Kode Menghapus Data terpilih
session_start();
    include "../../koneksi.php";
if(isset($_GET['id'])){
    $kode = $_GET['id'];
	$mySql	= "DELETE FROM tabel_anggota WHERE id_anggota=$kode";
	$myQry	= mysqli_query($db, $mySql);
}
?>