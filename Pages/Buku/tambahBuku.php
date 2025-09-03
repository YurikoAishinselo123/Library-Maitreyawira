<form method="post" action="index.php?page=tambahBukuLogic" enctype="multipart/form-data">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Buku Baru</h3>
        <div class="d-flex justify-content-end">
            <a href="index.php?page=daftarBuku" class="btn btn-danger px-4 py-2 mr-2">Cancel</a>
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-4 py-2">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Judul Buku</b></label>
            <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" required>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Penulis Buku</b></label>
            <input type="text" name="penulis_buku" class="form-control" placeholder="Masukkan Penulis Buku" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Penerbit Buku</b></label>
            <input type="text" name="penerbit_buku" class="form-control" placeholder="Masukkan Penerbit Buku" required>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Tahun Terbit</b></label>
            <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit" required
                min="1900" max="<?php echo date('Y'); ?>">
        </div>

    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>NISN</b></label>
            <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN" required>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Stok Buku</b></label>
            <input type="number" name="stok_buku" class="form-control" placeholder="Masukkan Stok Buku" required>
        </div>
    </div>
</form>