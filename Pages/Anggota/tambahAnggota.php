<form method="post" action="main.php?page=actionDaftarProject" enctype="multipart/form-data">
    <h3>Anggota Baru</h3>
    <br>
    <div class="form-row">
        <!-- NIS -->
        <div class="col-md-12 mb-3">
            <label><b>NIS</b></label>
            <input type="text" name="kodeAnggota" class="form-control" placeholder="Masukkan NIS" required>
        </div>

        <!-- Nama Anggota -->
        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="namaAnggota" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tglLahir" class="form-control" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Jenis Kelamin</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderL" value="Laki-laki" required>
                <label class="form-check-label" for="genderL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderP" value="Perempuan" required>
                <label class="form-check-label" for="genderP">Perempuan</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-3 py-1">
        </div>
    </div>
</form>