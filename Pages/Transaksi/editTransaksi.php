
<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM  tabel_transaksi t
JOIN tabel_anggota a ON t.id_anggota = a.id_anggota
JOIN tabel_buku b ON t.id_buku = b.id_buku
WHERE id_transaksi='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);?>
<form method="post" action="index.php?page=editTransaksiLogic" enctype="multipart/form-data">
    <h3>Ubah Transaksi</h3>
    <br>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label><b>ID Transaksi</b></label>
            <input type="text" name="id_transaksi" class="form-control" value="<?= $data['id_transaksi'] ?>" readonly>
        </div>
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Peminjaman</b></label>
            <input type="date" name="tanggal_peminjaman" class="form-control" value="<?= $data['tanggal_peminjaman']?>">
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Nama Buku</b></label>
            <input type="text" name="" class="form-control" value="<?= $data['judul_buku'] ?>" readonly>
            <input type="hidden" name="id_buku" value="<?= $data['id_buku']?>">

        </div>

        </div>

        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" name="" class="form-control" value="<?= $data['nama_anggota'] ?>" readonly>

        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Status Transaksi</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_transaksi" id="genderL" value="Dipinjam"
                    >
                <label class="form-check-label" for="genderL">Dipinjam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_transaksi" id="genderP" value="Dikembalikan"
                    >
                <label class="form-check-label" for="genderP">Dikembalikan</label>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Pengembalian</b></label>
            <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="Masukkan NIS" >
        </div>


        <!-- Submit Button -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-3 py-1">
            <a href="index.php?page=daftarTransaksi" class="btn btn-danger px-3 py-1">Cancel</a>
        </div>
    </div>
</form>