<form method="post" action="index.php?page=tambahAnggotaLogic" enctype="multipart/form-data">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Anggota Baru</h2>
            <div class="d-flex justify-content-end">
                <a href="index.php?page=daftarAnggota" class="btn btn-danger px-4 py-2 mr-2">Cancel</a>
                <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-4 py-2">
            </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-4">
            <label><b>NIS</b></label>
            <input type="number" name="NIS" class="form-control" placeholder="Masukkan NIS" required>
        </div>
        <div class="col-md-6 mb-4">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan Nama" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tanggal_lahir" class="form-control" required max="<?= date('Y-m-d') ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Jenis Kelamin</b></label>
            <div class="d-flex">
                <div class="form-check mr-3">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderL" value="Laki-laki"
                        required>
                    <label class="form-check-label" for="genderL">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderP" value="Perempuan"
                        required>
                    <label class="form-check-label" for="genderP">Perempuan</label>
                </div>
            </div>
        </div>
    </div>

</form>