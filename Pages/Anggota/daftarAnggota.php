<!-- DataTales Example -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Anggota</h1>
  <a href="index.php?page=tambahAnggota" class="btn btn-primary btn-sm">
    <i class="fas fa-plus"></i> Tambah Anggota
  </a>
</div>

<div class="table-responsive">
  <table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Anggota</th>
        <th>NIS</th>
        <th>Nama Anggota</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th class="text-center">Menu</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "koneksi.php";
      $nomor = 0;
      $sql = "SELECT * FROM tabel_anggota";
      $query = mysqli_query($db, $sql);
      while ($data = mysqli_fetch_array($query)) {
        $nomor++;
        ?>
        <tr>
          <td><?php echo $nomor; ?></td>
          <td><?php echo $data['id_anggota']; ?></td>
          <td><?php echo $data['NIS']; ?></td>
          <td><?php echo $data['nama_anggota']; ?></td>
          <td><?php echo $data['tanggal_lahir']; ?></td>
          <td><?php echo $data['jenis_kelamin']; ?></td>
          <td class="text-center">
            <a href="index.php?page=editAnggota&id=<?php echo $data['id_anggota']; ?>"
              class="btn btn-sm btn-success">Edit</a>
            <a href="index.php?page=hapusAnggotaLogic&id=<?php echo $data['id_anggota']; ?>"
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