<?php
if (isset($_POST['proses'])) {
    include "koneksi.php";

    $kode = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $NIS = $_POST['NIS'];

    $today = date("Y-m-d");
    if ($tanggal_lahir > $today) {
        echo "<script>
                alert('Tanggal lahir tidak boleh setelah hari ini!');
                window.location='index.php?page=editAnggota&id=$kode';
              </script>";
        exit;
    }

    $sql = "UPDATE tabel_anggota 
            SET nama_anggota='$nama_anggota', 
                tanggal_lahir='$tanggal_lahir', 
                jenis_kelamin='$jenis_kelamin', 
                NIS='$NIS' 
            WHERE id_anggota='$kode'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>
                alert('Data Anggota berhasil dirubah');
                window.location='index.php?page=daftarAnggota';
              </script>";
    } else {
        echo "Edit anggota gagal: " . mysqli_error($db);
    }
}
?>