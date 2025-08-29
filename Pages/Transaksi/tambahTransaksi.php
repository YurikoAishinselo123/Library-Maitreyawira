<form method="post" action="index.php?page=tambahTransaksiLogic" enctype="multipart/form-data">
    <h3>Transaksi Baru</h3>
    <br>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Peminjaman</b></label>
            <input type="date" name="tanggal_peminjaman" class="form-control" required>
        </div>

        <div class="col-md-12 mb-3">
            <label><b>Nama Buku</b></label>
            <select name = "id_buku">
                    <?php
                      include "koneksi.php";
                      $sql = "SELECT * FROM tabel_buku ";
                      $query = mysqli_query($db,$sql);
                      //looping untuk memanggil semua data pada tabel
                      while ($result = mysqli_fetch_array($query)){
                    ?><option value="<?php echo $result['id_buku'];?>">
                    <?php echo $result['judul_buku'];?> </option>
                    <?php } ?>
                  </select>

        </div>

        <div class="col-md-12 mb-3">
            <label><b>Nama Anggota</b></label>
            <select name = "id_anggota">
                    <?php
                      $sql = "SELECT * FROM tabel_anggota ";
                      $query = mysqli_query($db,$sql);
                      //looping untuk memanggil semua data pada tabel
                      while ($result = mysqli_fetch_array($query)){
                    ?><option value="<?php echo $result['id_anggota'];?>">
                    <?php echo $result['nama_anggota'];?> </option>
                    <?php } ?>
                  </select>

        </div>

        <!-- Jenis Kelamin -->
        <div class="col-md-12 mb-3">
            <label><b>Status Transaksi</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_transaksi" id="genderL" value="Dipinjam"
                    required>
                <label class="form-check-label" for="genderL">Dipinjam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="genderP" value="Dikembalikan"
                    disabled>
                <label class="form-check-label" for="genderP">Dikembalikan</label>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label><b>Tanggal Pengembalian</b></label>
            <input type="date" name="tanggal_pengembalian" class="form-control" placeholder="Masukkan NIS" disabled>
        </div>


        <!-- Submit Button -->
        <div class="col-md-12 mt-3">
            <input type="submit" name="proses" value="Tambah" class="btn btn-primary px-3 py-1">
            <a href="index.php?page=daftarTransaksi" class="btn btn-danger px-3 py-1">Cancel</a>
        </div>
    </div>
</form>