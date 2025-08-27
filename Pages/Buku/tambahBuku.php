<form method="post" action="index.php?page=tambahBukuLogic" enctype="multipart/form-data">
    <h3>Buku Baru</h3>
    <br>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label><b>Judul Buku</b></label>
            <input type="text" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Penulis Buku</b></label>
            <input type="text" name="penulis_buku" class="form-control" placeholder="Masukkan Penulis Buku" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Penerbit Buku</b></label>
            <input type="text" name="penerbit_buku" class="form-control" placeholder="Masukkan Penerbit Buku" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Tahun terbit</b></label>
            <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun terbit" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>NISN</b></label>
            <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Stok Buku</b></label>
            <input type="number" name="stok_buku" class="form-control" placeholder="Masukkan Stok Buku" required>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-3 py-1">
            <a href="index.php?page=daftarBuku" class="btn btn-danger px-3 py-1">Cancel</a>
        </div>
    </div>
</form>