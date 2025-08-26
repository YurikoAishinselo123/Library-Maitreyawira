<!-- DataTales Example -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
</div>

<div class="table-responsive">
  <table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
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
      $sql = "SELECT * FROM tabel_anggota";
      $query = mysqli_query($db, $sql);
      $nomor = 1; // start numbering
      while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
          <td><?php echo $nomor; ?></td>
          <td><?php echo $data['kodeAnggota']; ?></td>
          <td><?php echo $data['namaAnggota']; ?></td>
          <td><?php echo $data['tglLahir']; ?></td>
          <td><?php echo $data['gender']; ?></td>
          <td class="text-center">
            <a href="index.php?page=editAnggota&id=<?php echo $data['kodeAnggota']; ?>"
              class="btn btn-sm btn-success">Edit</a>
            <a href="index.php?page=hapusAnggota&id=<?php echo $data['kodeAnggota']; ?>"
              onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')"
              class="btn btn-sm btn-danger">Hapus</a>
          </td>
        </tr>
        <?php
        $nomor++;
      }
      ?>
    </tbody>
  </table>
</div>