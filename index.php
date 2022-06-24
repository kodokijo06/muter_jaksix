<?php
  session_start();

  include 'koneksi.php';
  
  if( !isset($_SESSION['logged_in']) )
  {
      // header("location:login.php?pesan=belum_login");
      header("location:login.php");
      exit();
  }    
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Muter - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MUTER <sup>JakSix</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Input Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Pegawai:</h6>
            <a class="collapse-item" href="pegawai.php">Input Pegawai</a>
            <a class="collapse-item" href="kedudukan.php">Input Kedudukan</a>
            <a class="collapse-item" href="jpm.php">Input JPM</a>
            <a class="collapse-item" href="sertifikat.php">Input Sertifikat</a>
            <a class="collapse-item" href="minat.php">Input Minat</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Proyeksi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Posisi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Posisi:</h6>
            <a class="collapse-item" href="fo.php">Front Office</a>
            <a class="collapse-item" href="mo.php">Middle Office</a>
            <a class="collapse-item" href="bo.php">Back Office</a>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Monitoring
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-folder"></i>
          <span>Monitoring</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Monitoring:</h6>
            <a class="collapse-item" href="sesuai_minat.php">Kesesuaian Minat</a>
            <a class="collapse-item" href="histori_mutasi.php">Histori Mutasi Internal <br>Per Pegawai</a>
        </div>
      </li>

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

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="img/jakarta_enam.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="proses_logout.php">
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

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PROYEKSI FRONT OFFICE</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php 
                        $query_fo = mysqli_query($connect,"select aa.nip, e.nama, g.keterangan as kedudukan, h.keterangan as seksi, f.kedudukan as kode from 
                        (select a.nip,ifnull(b.nilai,0) as komunikasi, ifnull(c.nilai,0) as analisis, ifnull(d.nilai,0) as stakeholder from t_pegawai a left join (select * from t_jpm where jpm = '1') b on a.nip = b.nip left join (select * from t_jpm where jpm = '2') c on a.nip = c.nip left join (select * from t_jpm where jpm = '3') d on a.nip = d.nip) aa  
                        left join 
                        t_pegawai e on aa.nip = e.nip 
                        left join 
                        t_kedudukan f on aa.nip = f.nip 
                        left join 
                        t_ref_kedudukan g on f.kedudukan=g.kode 
                        left join 
                        t_seksi h on f.seksi= h.kode 
                        where aa.stakeholder >= aa.analisis and aa.stakeholder >= aa.komunikasi and f.aktif= '1';");
                        $query_total = mysqli_query($connect, "select * from t_kedudukan where aktif='1';");
                        echo mysqli_num_rows($query_fo);
                        echo "/";
                        echo mysqli_num_rows($query_total)." PEGAWAI";
                      ?>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PROYEKSI MIDDLE OFFICE</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                        $query_fo = mysqli_query($connect,"select aa.nip, e.nama, g.keterangan as kedudukan, h.keterangan as seksi, f.kedudukan as kode from 
                        (select a.nip,ifnull(b.nilai,0) as komunikasi, ifnull(c.nilai,0) as analisis, ifnull(d.nilai,0) as stakeholder from t_pegawai a left join (select * from t_jpm where jpm = '1') b on a.nip = b.nip left join (select * from t_jpm where jpm = '2') c on a.nip = c.nip left join (select * from t_jpm where jpm = '3') d on a.nip = d.nip) aa  
                        left join 
                        t_pegawai e on aa.nip = e.nip 
                        left join 
                        t_kedudukan f on aa.nip = f.nip 
                        left join 
                        t_ref_kedudukan g on f.kedudukan=g.kode 
                        left join 
                        t_seksi h on f.seksi= h.kode 
                        where aa.komunikasi >= aa.analisis and aa.komunikasi >= aa.stakeholder and f.aktif= '1';");
                        $query_total = mysqli_query($connect, "select * from t_kedudukan where aktif='1';");
                        echo mysqli_num_rows($query_fo);
                        echo "/";
                        echo mysqli_num_rows($query_total)." PEGAWAI";
                      ?>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PROYEKSI BACK OFFICE</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                        $query_fo = mysqli_query($connect,"select aa.nip, e.nama, g.keterangan as kedudukan, h.keterangan as seksi, f.kedudukan as kode from 
                        (select a.nip,ifnull(b.nilai,0) as komunikasi, ifnull(c.nilai,0) as analisis, ifnull(d.nilai,0) as stakeholder from t_pegawai a left join (select * from t_jpm where jpm = '1') b on a.nip = b.nip left join (select * from t_jpm where jpm = '2') c on a.nip = c.nip left join (select * from t_jpm where jpm = '3') d on a.nip = d.nip) aa  
                        left join 
                        t_pegawai e on aa.nip = e.nip 
                        left join 
                        t_kedudukan f on aa.nip = f.nip 
                        left join 
                        t_ref_kedudukan g on f.kedudukan=g.kode 
                        left join 
                        t_seksi h on f.seksi= h.kode 
                        where aa.analisis >= aa.komunikasi and aa.analisis >= aa.stakeholder and f.aktif= '1';");
                        $query_total = mysqli_query($connect, "select * from t_kedudukan where aktif='1';");
                        echo mysqli_num_rows($query_fo);
                        echo "/";
                        echo mysqli_num_rows($query_total)." PEGAWAI";
                      ?>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">INFORMASI APLIKASI MUTER (MUTASI INTERNAL) JAKSIX</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div align="justify">Aplikasi ini bertujuan untuk memudahkan pengambil kebijakan terkait perputaran mutasi antar seksi (internal) agar terdapat keseimbangan antara kebutuhan, pengalaman dan minat atas Sumber Daya yang dimiliki oleh Organisasi. Karena sifatnya sebagai pembantu pengambil kebijakan, maka informasi proyeksi yang ada pada aplikasi ini bukanlah keputusan mutlak. Segala parameter yang digunakan untuk menghasilkan proyeksi dapat diubah sesuai ketentuan yang diinginkan pengambil kebijakan.</div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="text-align:center;">POSISI PEGAWAI BERDASARKAN KEDUDUKAN</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="kedudukanChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> FO
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> MO
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> BO
                    </span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kodok_Ijo 2020</span>
            <br>
            <span>Template by sb-admin-2</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <script>
    // Pie Chart Example
    var ctx = document.getElementById("kedudukanChart");
    var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Front Office", "Middle Office", "Back Office"],
        datasets: [{
          data: [
            <?php 
              $jumlah_fo = mysqli_query($connect, "select * from t_kedudukan where kedudukan = '1' and aktif = '1';");
              echo mysqli_num_rows($jumlah_fo);  
            ?>,
            <?php 
              $jumlah_mo = mysqli_query($connect, "select * from t_kedudukan where kedudukan = '2' and aktif = '1';");
              echo mysqli_num_rows($jumlah_mo);  
            ?>,
            <?php 
              $jumlah_bo = mysqli_query($connect, "select * from t_kedudukan where kedudukan = '3' and aktif = '1';");
              echo mysqli_num_rows($jumlah_bo);  
            ?>
          ],
          backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
          hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 80,
      },
    });    
  </script>


</body>

</html>
