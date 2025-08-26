
<table class="table-sm">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis Buku</th>
                        <th scope="col">Penerbit Buku</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Stok Buku</th>
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
$sql = "SELECT * FROM tabel_buku ORDER BY tabel_buku.id_buku ASC";
$query = mysqli_query($db,$sql);
//looping untuk memanggil semua data pada tabel
while ($result = mysqli_fetch_array($query)){
    $nomor++;
    ?>
<tr>
    <td><?php echo htmlentities($nomor);?></td>
    <td><?php echo htmlentities($result['judul_buku']);?></td>
    <td><?php echo htmlentities($result['penulis_buku']);?></td>
    <td><?php echo htmlentities($result['penerbit_buku']);?></td>
    <td><?php echo htmlentities($result['tahun_terbit']);?></td>
    <td><?php echo htmlentities($result['nisn']);?></td>
    <td><?php echo htmlentities($result['stok_buku']);?></td>
    <!-- Button untuk aksi update dan delete-->
    <td class='text-center'>
        <a href="editBuku.php?id=<?php echo $result['id_buku'];?>"> Update </a>
        <a href="hapusBukuAksi.php?id=<?php echo $result['id_buku'];?>">Delete</a>
    </td>
</tr>
<?php } ?>
<a href="tambahBuku.php">Tambah buku</a>