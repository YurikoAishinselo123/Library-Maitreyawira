<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php include "Pages/Dashboard/dashboardLogic.php"; ?>
<?php include "Pages/Dashboard/grafikPeminjamanLogic.php"; ?>
<?php include "Pages/Dashboard/grafikAnggotaLogic.php"; ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Buku</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalBuku ?></div>
        </div>
        <i class="fas fa-book fa-2x text-gray-300"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Anggota</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalAnggota ?></div>
        </div>
        <i class="fas fa-users fa-2x text-gray-300"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku Dipinjam</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalDipinjam ?></div>
        </div>
        <i class="fas fa-book-reader fa-2x text-gray-300"></i>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Buku Dikembalikan</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalKembali ?></div>
        </div>
        <i class="fas fa-book fa-2x text-gray-300"></i>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 col-lg-6 mb-4">
    <div class="card shadow">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman per Bulan</h6>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="peminjamanChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-lg-6 mb-4">
    <div class="card shadow">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Perbandingan Anggota</h6>
      </div>
      <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
          <canvas id="anggotaPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
          <span class="mr-2"><i class="fas fa-circle text-primary"></i> Laki-laki</span>
          <span class="mr-2"><i class="fas fa-circle text-pink"></i> Perempuan</span>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById("peminjamanChart");

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?= json_encode($bulan) ?>,
      datasets: [{
        label: "Jumlah Peminjaman",
        data: <?= json_encode($total) ?>,
        backgroundColor: "rgba(78,115,223,0.05)",
        borderColor: "rgba(78,115,223,1)",
        borderWidth: 2,
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: { grid: { display: false } },
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 1,
            precision: 0
          }
        }
      }
    }
  });




  var ctxPie = document.getElementById("anggotaPieChart");
  new Chart(ctxPie, {
    type: 'doughnut',
    data: {
      labels: ["Laki-laki", "Perempuan"],
      datasets: [{
        data: [<?= $totalLaki ?>, <?= $totalPerempuan ?>],
        backgroundColor: ['#4e73df', '#e83e8c'],
        hoverBackgroundColor: ['#2e59d9', '#d63384'],
        borderColor: "rgba(234,236,244,1)",
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "70%",
      plugins: {
        legend: { display: true, position: 'bottom' }
      }
    }
  });
</script>