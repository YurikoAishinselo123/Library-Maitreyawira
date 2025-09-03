<!-- DataTales Example -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Transaksi</h1>
    <a href="index.php?page=tambahTransaksi" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Tambah Transaksi
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>Nama Anggota</th>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Dikembalikan</th>
                <th>Status Transaksi</th>
                <th class="text-center">Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $nomor = 0;
            $sql = "SELECT * FROM tabel_transaksi t 
            JOIN tabel_anggota a ON t.id_anggota = a.id_anggota 
            JOIN tabel_buku b ON t.id_buku = b.id_buku";
            $query = mysqli_query($db, $sql);
            while ($data = mysqli_fetch_array($query)) {
                $nomor++;
                ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $data['id_anggota']; ?></td>
                    <td><?php echo $data['nama_anggota']; ?></td>
                    <td><?php echo $data['id_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo date("d M Y", strtotime($data['tanggal_peminjaman'])); ?></td>
                    <td><?php echo date("d M Y", strtotime($data['tanggal_pengembalian'])); ?></td>
                    <td><?php echo $data['status_transaksi']; ?></td>
                    <td class="text-center">
                        <a href="index.php?page=editTransaksi&id=<?php echo $data['id_transaksi']; ?>"
                            class="btn btn-sm btn-success">Edit</a>
                        <a href="index.php?page=hapusTransaksiLogic&id=<?php echo $data['id_transaksi']; ?>"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>