<!-- DataTales Example -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
    <a href="index.php?page=tambahBuku" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Tambah Buku
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit Buku</th>
                <th>Tahun terbit</th>
                <th>NISN</th>
                <th>Stok Buku</th>
                <th class="text-center">Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tabel_buku";
            $query = mysqli_query($db, $sql);
            $nomor = 1;
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['penulis_buku']; ?></td>
                    <td><?php echo $data['penerbit_buku']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['stok_buku']; ?></td>
                    <td class="text-center">
                        <a href="index.php?page=editBuku&id=<?php echo $data['id_buku']; ?>"
                            class="btn btn-sm btn-success">Edit</a>
                        <a href="index.php?page=hapusBukuLogic&id=<?php echo $data['id_buku']; ?>"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>