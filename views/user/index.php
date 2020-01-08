<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Job Seekers</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/mdi.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" href="assets/css/style2.css" /> -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
    <!-- Script JS Font Awesome -->
    <script src="https://kit.fontawesome.com/941f29cdd8.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['login'] == FALSE) {
        echo 'Forbidden Access ! , You need to login first';
    } else {

    ?>
        <div class="container-fluid shadow-sm bg-white">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/views/index.php">Navbar</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>




                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">  
                        </ul> -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item active">

                            <li class="nav-item">
                                <button class="btn btn-gradient-success btn-block btn-sm  mr-2">Dashboard</button>
                            </li>
                            <li class="nav-item ml-2">
                                <a href="/search" class="btn btn-gradient-info btn-block btn-sm  mr-2">Cari Kerja</a>
                            </li>
                            <li class="nav-item ml-2">
                                <a href="/logout" class="btn btn-gradient-danger btn-block btn-sm  mr-2 ">Logout</a>
                            </li>

                        </ul>

                    </div>

                </div>
            </nav>
        </div>


        <div class="container">
            <div class="d-flex flex-column mt-5 sm-12 justify-content-center">
                <div class="dashboard-user">

                    <div class="d-flex flex-row">

                        <div class="p-2 bd-highlight align-self-center">
                            <?php echo "<span class='welcome'> Selamat datang , </span> <span class='w-username'> " . $_SESSION['username']; echo "</span>" ;?>
                        </div>
                        <div class="p-2 bd-highlight ml-auto">
                            Moch Nuril <img src="assets/img/pp.jpeg" class="card-img-top rounded-circle" style="width: 50px;height:50px;">
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-md-4 stretch-card grid-margin">
                                                        
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/img/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Lamaran Kerja <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h5 class="mb-5"><i>10 Lamaran</i></h5>
                                    <h6 class="card-text"><a href="/user/lamaran">Lihat lamaran</a></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/img/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Setting Profile <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h5 class="mb-5">Data telah lengkap </h5>
                                    <h6 class="card-text"><a href="/user/setting">Setting</a></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/img/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Bantuan<i class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h5 class="mb-5">Customer Service 24/7 </h5>
                                    <h6 class="card-text">Minta bantuan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    <?php
    }
    ?>
</body>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>