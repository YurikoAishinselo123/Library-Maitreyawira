
<table class="table-sm">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
include "../../koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script language='JavaScript'>
    confirm('Anda Harus Login Terlebih Dahulu');
    document.location='../../index.php'</script>";
};
$nomor = 0;
$sql = "SELECT * FROM tabel_anggota ORDER BY tabel_anggota.id_anggota ASC";
$query = mysqli_query($db,$sql);
//looping untuk memanggil semua data pada tabel
while ($result = mysqli_fetch_array($query)){
    $nomor++;
    ?>
<tr>
    <td><?php echo htmlentities($nomor);?></td>
    <td><?php echo htmlentities($result['nama_anggota']);?></td>
    <td><?php echo htmlentities($result['tanggal_lahir']);?></td>
    <td><?php echo htmlentities($result['jenis_kelamin']);?></td>
    <td><?php echo htmlentities($result['NIS']);?></td>
    <!-- Button untuk aksi update dan delete-->
    <td class='text-center'>
        <a href="editanggota.php?id=<?php echo $result['id_anggota'];?>"> Update </a>
        <a href="hapusanggotaAksi.php?id=<?php echo $result['id_anggota'];?>">Delete</a>
    </td>
</tr>
<?php } ?>
<a href="tambahanggota.php">Tambah anggota</a>