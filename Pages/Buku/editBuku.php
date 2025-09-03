<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tabel_buku WHERE id_buku='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>

<form method="post" action="index.php?page=editBukuLogic" enctype="multipart/form-data">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Edit Buku</h3>
        <div>
            <a href="index.php?page=daftarBuku" class="btn btn-danger px-4 py-2 mr-2">Cancel</a>
            <input type="submit" name="proses" value="Confirm" class="btn btn-primary px-4 py-2">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>ID Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['id_buku'] ?>" name="id_buku" readonly>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Judul Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['judul_buku'] ?>" name="judul_buku"
                required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Penulis Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['penulis_buku'] ?>" name="penulis_buku"
                required>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Penerbit Buku</b></label>
            <input type="text" class="form-control" value="<?php echo $data['penerbit_buku'] ?>" name="penerbit_buku"
                required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Tahun Terbit</b></label>
            <input type="number" class="form-control" value="<?php echo $data['tahun_terbit'] ?>" name="tahun_terbit"
                required min="1900" max="<?php echo date('Y'); ?>">
        </div>

        <div class="col-md-6 mb-3">
            <label><b>NISN</b></label>
            <input type="number" class="form-control" value="<?php echo $data['nisn'] ?>" name="nisn" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Stok Buku</b></label>
            <input type="number" class="form-control" value="<?php echo $data['stok_buku'] ?>" name="stok_buku"
                required>
        </div>
    </div>
</form>