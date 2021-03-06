<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Employeer</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/employee/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/">Home</a>



    <!-- Navbar Search -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow ">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div>
              <i class="fas fa-user-circle fa-fw fa-2x"></i>
              Hi ,
              <?php echo $_SESSION['username']; ?>

            </div>

          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
      </ul>

  </nav>

  <div id="wrapper">

    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/employeer">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employeer/data-lowongan">
          <i class="fas fa-fw fa-file"></i>
          <span>Data Lowongan</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/employeer/buat-lowongan">
          <i class="fas fa-fw fa-file-upload"></i>
          <span>Buat Lowongan</span></a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Lowongan Kerja</li>
        </ol>

      </div>

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">

          Buat Lowongan Kerja</div>
        <div class="card-body">
          <form action="/employeer/postLamaran" method="POST">
            <div class="form-group">
              <label for="posisi">Nama Pekerjaan</label>
              <input type="text" class="form-control" name="posisi" id="posisi">
            </div>
            <div class="form-group">
              <label for="posisi">Kategori</label>
              <select class="form-control" name="kategori" id="kategori">
                <option value="it">IT</option>
                <option value="Human Resource">Human Resource</option>
                <option value="Office Support">Office Boy</option>
                <option value="Quality Control">Quality Control</option>
              </select>
            </div>

            <div class="form-group">
              <label for="job deskripsi">Job Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1"></textarea>
            </div>

            <div class="form-group">
              <label for="job location">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="lokasi"></input>
            </div>

            <div class="form-group">
              <label for="salary">Salary (Rp.)</label>
              <input type="number" name="salary" class="form-control" id="salary">
            </div>
            
            <input type="hidden" name="id_employeer" value="<?php echo $_SESSION['id']; ?>">
            <input type="submit" class="btn btn-primary" value="Post"></input>
          </form>


        </div>
      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->


  </div>
  <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../assets/vendor/chart.js/Chart.min.js"></script>
  <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/employee/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../assets/employee/js/demo/datatables-demo.js"></script>
  <script src="../assets/employee/js/demo/chart-area-demo.js"></script>

</body>

</html>