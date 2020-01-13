<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Job Seekers</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/search.css" />
    <!-- Script JS Font Awesome -->
    <script src="https://kit.fontawesome.com/941f29cdd8.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid shadow-sm bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">  
                            </ul> -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <?php
                            if ($_SESSION['login'] == FALSE) {
                                echo "<li class='nav-item'>
                                <a href='/' data-toggle='modal' data-target='#modalLogin' class='btn btn-primary btn-sm mr-2'>Login</a>
                            </li>
                            <li class='nav-item'>
                                <a href='/' class='btn btn-primary btn-sm  mr-2'>Register</a>
                            </li>";
                            } else {
                                echo "
                            
                        <li class='nav-item dropdown'>
                            
                            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            
                            " . $_SESSION['username'];

                                echo "
                            </a>

                            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                              <a class='dropdown-item text-primary' href='/user'>Profile</a>
                              <a class='dropdown-item text-primary' href='#'>Lamaran Kerja</a>
                              <div class='dropdown-divider'></div>
                              <a class='dropdown-item text-danger' href='logout'>Logout</a>
                              
                            </div>
                        </li>

                                          
                            ";
                            }
                            ?>


                    </ul>

                </div>

            </div>
        </nav>
    </div>

    <!-- MODAL  -->
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

                    <form action='/login' method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
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

    <!-- END MODAL -->


    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="searchbox">
                    <form action="/search?params" method="post">
                        <div class="d-flex flex-column flex-md-row">
                            <!-- <input class="form-control" name="kategori" type="text" placeholder="Kategori Pekerjaan"> -->
                            <select class="form-control pr-4" name="kategori">
                                <option value="" disabled selected> Kategori Pekerjaan </option>
                                <?php foreach ($search->showJobList() as $x) { ?>
                                    <option value="<?php echo $x['jobCategory']; ?>"><?php echo $x['jobCategory']; ?></option>
                                <?php } ?>

                            </select>

                            <select class="form-control pr-4" name="posisi">
                                <option value="" disabled selected> Posisi Pekerjaan </option>
                                <?php foreach ($search->showJobList() as $x) { ?>
                                    <option value="<?php echo $x['jobName']; ?>"><?php echo $x['jobName']; ?></option>
                                <?php } ?>
                            </select>

                            <select class="form-control pr-4" name="lokasi">
                                <option value="" disabled selected> Lokasi Pekerjaan </option>
                                <?php foreach ($search->showJobList() as $x) { ?>
                                    <option value="<?php echo $x['jobLocation']; ?>"><?php echo $x['jobLocation']; ?></option>
                                <?php } ?>
                            </select>

                            <button class="btn btn-primary btn-sm " type="submit" type="text"> <i class="fas fa-search fa-2x"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="container mt-5"> -->

        <div class="row">

            <?php
            if ($_SERVER['REQUEST_URI'] == '/search') {
                foreach ($search->showJobList() as $x) {
            ?>

                    <div class="col-md-4 mt-5 text-center">

                        <div class="card mx-auto" style="width: 18rem;">
                            <div class="card-header"><?php echo $x['jobName']; ?></div>
                            <img class="card-img-top img-fluid align-self-center" src="/assets/img/job-sample.png" alt="Card image cap" style="width:auto;height:auto;max-width:100px;">
                            <div class="card-body">
                                <p class="card-title">Nama Perusahaan</p>
                                <p class="card-text"> <i class="fas fa-map-marker-alt"></i> <?php echo $x['jobLocation']; ?></p>
                                <p class="card-text"><?php echo $x['jobDesc']; ?></p>

                                <form action="/search?action=lihat" method="POST">
                                    <input type="hidden" name="idJob" value="<?php echo $x['id']; ?>">
                                    <input type="hidden" name="idJobseeker" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Lihat Detail">
                                </form>


                                <?php if ($_SESSION['login'] == TRUE) { ?>
                                    <form action="/search?action=lamar" method="POST">
                                        <input type="hidden" name="idJob" value="<?php echo $x['id']; ?>">
                                        <input type="hidden" name="idJobseeker" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Lamar">
                                    </form>

                                <?php } else {
                                } ?>

                            </div>
                        </div>


                    </div>


                    <!-- IKI RUBAHEN -->
                <?php
                } //tutup foreach

            } else {
                foreach ($search->searchJobList() as $y) {
                ?>

                    <center>
                        <div class="col-md-3 mr-3 mt-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header"><?php echo $y['jobName']; ?></div>
                                <img class="card-img-top img-fluid" src="/assets/img/job-sample.png" alt="Card image cap" style="width:auto;height:auto;max-width:100px;">
                                <div class="card-body">
                                    <p class="card-title">Nama Perusahaan</p>
                                    <p class="card-text"> <i class="fas fa-map-marker-alt"></i> <?php echo $y['jobLocation']; ?></p>
                                    <p class="card-text"><?php echo $y['jobDesc']; ?></p>

                                    <form action="/search?action=lihat" method="POST">
                                        <input type="hidden" name="idJob" value="<?php echo $x['id']; ?>">
                                        <input type="hidden" name="idJobseeker" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Lihat Detail">
                                    </form>


                                    <?php if ($_SESSION['login'] == TRUE) { ?>
                                        <form action="/search?action=lamar" method="POST">
                                            <input type="hidden" name="idJob" value="<?php echo $x['id']; ?>">
                                            <input type="hidden" name="idJobseeker" value="<?php echo $_SESSION['id']; ?>">
                                            <input type="submit" class="btn btn-sm btn-primary" value="Lamar">
                                        </form>

                                    <?php } else {
                                    } ?>

                                </div>
                            </div>
                        </div>
                    </center>
            <?php
                }
            }
            ?>







        </div>
    </div>








</body>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>