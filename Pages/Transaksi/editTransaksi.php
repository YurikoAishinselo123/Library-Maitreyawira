<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM tabel_transaksi t
        JOIN tabel_anggota a ON t.id_anggota = a.id_anggota
        JOIN tabel_buku b ON t.id_buku = b.id_buku
        WHERE t.id_transaksi='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>

<form method="post" action="index.php?page=editTransaksiLogic" enctype="multipart/form-data">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Edit Transaksi</h3>
        <div>
            <a href="index.php?page=daftarTransaksi" class="btn btn-danger px-4 py-2 mr-2">Cancel</a>
            <input type="submit" name="proses" value="Confirm" class="btn btn-primary px-4 py-2">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>ID Transaksi</b></label>
            <input type="text" name="id_transaksi" class="form-control" value="<?= $data['id_transaksi'] ?>" readonly>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>ID Anggota</b></label>
            <input type="number" class="form-control" value="<?= $data['id_anggota'] ?>" name="id_anggota" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Nama Anggota</b></label>
            <input type="text" class="form-control" value="<?= $data['nama_anggota'] ?>" name="nama_anggota" readonly>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>ID Buku</b></label>
            <input type="number" class="form-control" value="<?= $data['id_buku'] ?>" name="id_buku" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Judul Buku</b></label>
            <input type="text" class="form-control" value="<?= $data['judul_buku'] ?>" name="judul_buku" readonly>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Tanggal Peminjaman</b></label>
            <input type="date" class="form-control" value="<?= $data['tanggal_peminjaman'] ?>" name="tanggal_peminjaman"
                max="<?= date('Y-m-d') ?>" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Tanggal Pengembalian</b></label>
            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?= ($data['status_transaksi'] == 'Dikembalikan' && !empty($data['tanggal_pengembalian']))
                ? $data['tanggal_pengembalian']
                : '' ?>" min="<?= $data['tanggal_peminjaman'] ?>" max="<?= date('Y-m-d') ?>"
                <?= ($data['status_transaksi'] != 'Dikembalikan') ? 'disabled' : '' ?>>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Status Transaksi</b></label>
            <select name="status_transaksi" id="status_transaksi" class="form-control" required>
                <option value="Dipinjam" <?= ($data['status_transaksi'] == "Dipinjam") ? "selected" : "" ?>>Dipinjam
                </option>
                <option value="Dikembalikan" <?= ($data['status_transaksi'] == "Dikembalikan") ? "selected" : "" ?>>
                    Dikembalikan</option>
            </select>
        </div>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const statusSelect = document.getElementById("status_transaksi");
        const tanggalPengembalian = document.getElementById("tanggal_pengembalian");

        function toggleTanggalPengembalian() {
            if (statusSelect.value === "Dikembalikan") {
                tanggalPengembalian.disabled = false;
                tanggalPengembalian.required = true;
            } else {
                tanggalPengembalian.value = "";
                tanggalPengembalian.disabled = true;
                tanggalPengembalian.required = false;
            }
        }

        toggleTanggalPengembalian();

        statusSelect.addEventListener("change", toggleTanggalPengembalian);
    });
</script>