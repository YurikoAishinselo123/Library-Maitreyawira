<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tabel_anggota WHERE id_anggota='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>

<form method="post" action="index.php?page=editAnggotaLogic" enctype="multipart/form-data">
    <div class="form-row">
        <h3>Edit Anggota</h3>

        <div class="col-md-12 mb-3">
            <label><b>ID Anggota</b></label>
            <input type="text" name="id_anggota" class="form-control" value="<?= $data['id_anggota'] ?>" readonly>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>NIS</b></label>
            <input type="number" name="NIS" class="form-control" value="<?= $data['NIS'] ?>">
        </div>

        <!-- Nama Anggota -->
        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="nama_anggota" class="form-control" value="<?= $data['nama_anggota'] ?>">
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data['tanggal_lahir'] ?>">
        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Jenis Kelamin</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderL" value="Laki-laki"
                    <?= ($data['jenis_kelamin'] == "Laki-laki") ? "checked" : "" ?>>
                <label class="form-check-label" for="genderL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderP" value="Perempuan"
                    <?= ($data['jenis_kelamin'] == "Perempuan") ? "checked" : "" ?>>
                <label class="form-check-label" for="genderP">Perempuan</label>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Confirm" class="btn btn-primary">
            <a href="index.php?page=daftarAnggota" class="btn btn-sm btn-danger px-3 py-1">Cancel</a>
        </div>

    </div>
</form>