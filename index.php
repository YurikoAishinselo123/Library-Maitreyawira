<?php
session_start();

if (!isset($_SESSION['username'])) {
  echo "<script language='JavaScript'>
    confirm('Login Terlebih Dahulu');
    document.location='Pages/Login/login.php'</script>";
}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="Global/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="Global/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <?php $page = $_GET['page'] ?? 'dashboard'; ?>

      <li class="nav-item <?= $page == 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php?page=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item <?= $page == 'daftarAnggota' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php?page=daftarAnggota">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Anggota</span>
        </a>
      </li>

      <li class="nav-item <?= $page == 'daftarBuku' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php?page=daftarBuku">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Buku</span>
        </a>
      </li>

      <li class="nav-item <?= $page == 'daftarTransaksi' ? 'active' : '' ?>">
        <a class="nav-link" href="index.php?page=daftarTransaksi">
          <i class="fas fa-fw fa-book-reader"></i>
          <span>Data Transaksi</span>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Yuriko Aishinselo
                </span>
                <img class="img-profile rounded-circle" src="Resources/img/undraw_profile.svg" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php
          if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
              case 'dashboard':
                include "Pages/Dashboard/dashboard.php";
                break;
              case 'daftarAnggota':
                include "Pages/Anggota/daftarAnggota.php";
                break;
              case 'tambahAnggota':
                include "Pages/Anggota/tambahAnggota.php";
                break;
              case 'tambahAnggotaLogic':
                include "Pages/Anggota/tambahAnggotaLogic.php";
                break;
              case 'editAnggota':
                include "Pages/Anggota/editAnggota.php";
                break;
              case 'editAnggotaLogic':
                include "Pages/Anggota/editAnggotaLogic.php";
                break;
              case 'hapusAnggotaLogic':
                include "Pages/Anggota/hapusAnggotaLogic.php";
                break;
              case 'daftarBuku':
                include "Pages/Buku/daftarBuku.php";
                break;
              case 'tambahBuku':
                include "Pages/Buku/tambahBuku.php";
                break;
              case 'tambahBukuLogic':
                include "Pages/Buku/tambahBukuLogic.php";
                break;
              case 'editBuku':
                include "Pages/Buku/editBuku.php";
                break;
              case 'editBukuLogic':
                include "Pages/Buku/editBukuLogic.php";
                break;
              case 'hapusBukuLogic':
                include "Pages/Buku/hapusBukuLogic.php";
                break;
              case 'daftarTransaksi':
                include "Pages/Transaksi/daftarTransaksi.php";
                break;
              case 'tambahTransaksi':
                include "Pages/Transaksi/tambahTransaksi.php";
                break;
              case 'tambahTransaksiLogic':
                include "Pages/Transaksi/tambahTransaksiLogic.php";
                break;
              case 'editTransaksi':
                include "Pages/Transaksi/editTransaksi.php";
                break;
              case 'editTransaksiLogic':
                include "Pages/Transaksi/editTransaksiLogic.php";
                break;
              case 'hapusTransaksiLogic':
                include "Pages/Transaksi/hapusTransaksiLogic.php";
                break;
              case 'tes':
                include "Pages/tes.php";
                break;


              default:
                echo "Maaf, Halaman Tidak Ditemukan";
            }
          } else {
            include "Pages/Dashboard/dashboard.php";
          }
          ?>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="Global/vendor/jquery/jquery.min.js"></script>
  <script src="Global/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="Global/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="Global/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="Global/vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="Global/js/demo/chart-area-demo.js"></script>
  <script src="Global/js/demo/chart-pie-demo.js"></script> -->
</body>

</html>