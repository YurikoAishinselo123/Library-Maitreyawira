<?php
include "koneksi.php";
$id = $_GET['idb']; 
$sql = mysqli_query($db, "SELECT * FROM tblAnggota WHERE kodeAnggota = '$id'");
$data = mysqli_fetch_array($sql);
?>

<form method="post" action="main.php?page=updateAnggota" enctype="multipart/form-data">
    <div class="form-row">
        <h1>Edit Anggota</h1>

        <!-- NIS -->
        <div class="col-md-12 mb-3">
            <label><b>NIS</b></label>
            <input type="text" name="kodeAnggota" class="form-control" 
                   value="<?php echo $data['kodeAnggota'] ?>" readonly>
        </div>

        <!-- Nama Anggota -->
        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="namaAnggota" class="form-control" 
                   value="<?php echo $data['namaAnggota'] ?>">
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tglLahir" class="form-control" 
                   value="<?php echo $data['tglLahir'] ?>">
        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Jenis Kelamin</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" 
                       name="gender" id="genderL" value="Laki-laki"
                       <?php if($data['gender']=="Laki-laki") echo "checked"; ?>>
                <label class="form-check-label" for="genderL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" 
                       name="gender" id="genderP" value="Perempuan"
                       <?php if($data['gender']=="Perempuan") echo "checked"; ?>>
                <label class="form-check-label" for="genderP">Perempuan</label>
            </div>
        </div>

        <!-- Submit + Cancel -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Confirm" class="btn btn-primary">
            <a href="main.php?page=daftarAnggota" 
               class="btn btn-sm btn-danger px-3 py-1">Cancel</a>
        </div>
    </div>
</form>
