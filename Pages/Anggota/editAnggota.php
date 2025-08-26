<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include "../../koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script language='JavaScript'>
    confirm('Anda Harus Login Terlebih Dahulu');
    document.location='../../index.php'</script>";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

            <!--Form Input Item-->
            <div class="col">
                <!--Memanggil Data yang dipilih untuk update-->
                <?php
                    $id=$_GET['id'];
                    $sql ="SELECT * FROM tabel_anggota WHERE id_anggota='$id'";
                    $query = mysqli_query($db,$sql);
                    $result = mysqli_fetch_array($query);
                ?>
                <h2 align="center">Form Update</h2>
                <form action="editanggotaaksi.php" method="post">
                    <table>
                        <tr>
                            <td>ID anggota</td>
                            <td>: <input type="text" value="<?php echo htmlentities($result['id_anggota']);?>" name="id_anggota" readonly></td>
                        </tr>
                        <tr>
                            <td>Nama anggota</td>
                            <td>: <input type="text" value="<?php echo htmlentities($result['nama_anggota']);?>" name="nama_anggota" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal lahir</td>
                            <td>: <input type="date"value="<?php echo htmlentities($result['tanggal_lahir']);?>"  name="tanggal_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <input type="text" value="<?php echo htmlentities($result['jenis_kelamin']);?>" name="jenis_kelamin" required></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>: <input type="text" value="<?php echo htmlentities($result['NIS']);?>" name="NIS" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
              <input type="submit" value="Add Data" name="proses"  class="btn btn-sm btn-success"></input></td>
                        </tr>
                    </table>
                </form>
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>