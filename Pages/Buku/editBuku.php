<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tabel_buku WHERE id_buku='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>

<form method="post" action="index.php?page=editBukuLogic" enctype="multipart/form-data">
    <div class="form-row">
        <h3>Edit Buku</h3>

        <div class="col-md-12 mb-3">
            <label><b>ID Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['id_buku'] ?>" name="id_buku" readonly>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Judul Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['judul_buku'] ?>" name="judul_buku"
                required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Penulis Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['penulis_buku'] ?>" name="penulis_buku"
                required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Penerbit Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['penerbit_buku'] ?>" name="penerbit_buku"
                required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Tahun Terbit</b></label>
            <input type="number" class="form-control" value="<?php echo $data['tahun_terbit'] ?>" name="tahun_terbit"
                required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>NISN</b></label>
            <input type="number" class="form-control" value="<?php echo $data['nisn'] ?>" name="nisn" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Stok Buku</b></label>
            <input type="number" class="form-control" value="<?php echo $data['stok_buku'] ?>" name="stok_buku"
                required>
        </div>


        <!-- Submit + Cancel -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Confirm" class="btn btn-primary">
            <a href="index.php?page=daftarBuku" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>