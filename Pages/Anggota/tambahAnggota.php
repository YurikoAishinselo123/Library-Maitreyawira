<form method="post" action="index.php?page=tambahAnggotaLogic" enctype="multipart/form-data">
    <h3>Anggota Baru</h3>
    <br>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label><b>NIS</b></label>
            <input type="number" name="NIS" class="form-control" placeholder="Masukkan NIS" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Jenis Kelamin</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderL" value="Laki-laki"
                    required>
                <label class="form-check-label" for="genderL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderP" value="Perempuan"
                    required>
                <label class="form-check-label" for="genderP">Perempuan</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-3 py-1">
        </div>
    </div>
</form>