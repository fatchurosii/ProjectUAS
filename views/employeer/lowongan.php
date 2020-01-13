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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#modalLogin').modal('show');
    });
  </script>


</head>

<body id="page-top">




  <?php if ($_SESSION['login'] == False) { ?>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <!--Content-->
        <div class="modal-content ">
          <!--Header-->
          <div class="modal-header text-center border-bottom-0">
            <h3 class="modal-title w-100 " id="myModalLabel">Welcome!</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body mx-4">
            <!--Body-->

            <form action='/loginEmployeer' method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required="True">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required="True">
              </div>
              <div class="text-center">
                <button type="submit " name=submit class="login btn btn-primary round mb-3">Login</button>
              </div>

            </form>



          </div>
          <!--Footer-->
          <div class="text-center mb-3">
            <a class="text" onclick="$('#modalLogin').modal('hide')" data-toggle="modal" data-target="#modalReg" href="#">Dont Have Any Account ? Sign Up Now!</a>
            <br>
            <a class="text " href="">Forgot Password?</a>
          </div>
        </div>
        <!--Content-->
      </div>
    </div>
    <!-- Modal -->

    <!-- ModalReg -->
    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <!--Content-->
        <div class="modal-content ">
          <!--Header-->
          <div class="modal-header text-center border-bottom-0">
            <h3 class="modal-title w-100 " id="myModalLabel">Get Started!</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body mx-4">
            <!--Body-->
            <form action='/register?act=registerEmployeer' method="post">

              <div class="form-group">
                <label for="user">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
              </div>
              <div class="form-group">
                <input type="hidden" name="roles" class="form-control" value="employeer">
              </div>
          </div>
          <!--Footer-->
          <div class="text-center mb-3">
            <input type="submit" name="submit" value="Register" class="btn btn-primary round mb-3" />
            <br>
            <a class="text" onclick="$('#modalReg').modal('hide')" data-toggle="modal" data-target="#modalLogin" href="#">Already have Account ? Sign In Now!</a>
          </div>
          </form>

        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- End Modal Reg -->






  <?php } else { ?>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/">Employeer Panel</a>



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

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/employeer">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Lowongan</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/employeer/buat-lowongan">
            <i class="fas fa-fw fa-file-upload"></i>
            <span>Buat Lowongan</span></a>
        </li>

        <form method="post" action="/employeer/init">
          <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">

          <li class="nav-item text-center">
            <button type="submit" class="btn btn-primary" class="nav-link">
              <i class="fas fa-fw fa-plus"></i>
              <span>Init Bio</span>
          </li>

        </form>


      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">Jumlah Lowongan : <span><?php echo $search->countdataLowongan($_SESSION['id']); ?></span> </div>

                </div>

              </div>
            </div>



          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Pelamar</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Lowongan </th>
                      <th>Kategori</th>
                      <th>Jumlah Pelamar</th>
                      <th>Aksi </th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($search->dataLamaran($_SESSION['id']) as $x) { ?>
                      <!-- OVERLOADING FUNGSI  -->
                      <tr>
                        <td><?php echo $x['jobName']; ?></td>
                        <td><?php echo $x['jobCategory']; ?></td>
                        <td>0</td>
                        <td></td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Jobseeker 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>





  <?php } ?>

</body>

</html>