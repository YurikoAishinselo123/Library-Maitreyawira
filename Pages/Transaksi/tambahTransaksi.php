<form method="post" action="index.php?page=tambahTransaksiLogic" enctype="multipart/form-data">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Transaksi Baru</h3>
        <div class="d-flex justify-content-end">
            <a href="index.php?page=daftarTransaksi" class="btn btn-danger px-4 py-2 mr-2">Cancel</a>
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-4 py-2">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Tanggal Peminjaman</b></label>
            <input type="date" name="tanggal_peminjaman" class="form-control" value="<?= date('Y-m-d') ?>"
                max="<?= date('Y-m-d') ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Nama Buku</b></label>
            <select name="id_buku" class="form-control" required>
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tabel_buku";
                $query = mysqli_query($db, $sql);
                while ($result = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $result['id_buku']; ?>">
                        <?php echo $result['judul_buku']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Nama Anggota</b></label>
            <select name="id_anggota" class="form-control" required>
                <?php
                $sql = "SELECT * FROM tabel_anggota";
                $query = mysqli_query($db, $sql);
                while ($result = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo $result['id_anggota']; ?>">
                        <?php echo $result['nama_anggota']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label><b>Status Peminjaman</b></label>
            <input type="text" name="status_transaksi" class="form-control" value="Di pinjam" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label><b>Tanggal Pengembalian</b></label>
            <input type="date" name="tanggal_pengembalian" class="form-control" disabled>
        </div>
    </div>
</form>