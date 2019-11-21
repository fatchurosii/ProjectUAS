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
    <!-- Script JS Font Awesome -->
    <script src="https://kit.fontawesome.com/941f29cdd8.js" crossorigin="anonymous"></script>
</head>

<body>

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
                            <button class="btn btn-primary btn-sm  mr-2">Dashboard</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary btn-sm  mr-2 ">Logout</button>
                        </li>

                    </ul>

                </div>

            </div>
        </nav>
    </div>


    <div class="container">
        <div class="d-flex flex-column mt-5 sm-12 justify-content-center">
            <div class="dashboard-user">

                <h4 class="welcome">Selamat datang , </h4>
                <!--TODO:Menampilkan nama user menggunakan session -->
                <div class="card text-center">

                    <div class="card-header">
                        <img src="assets/img/pp.jpeg" class="card-img-top rounded-circle" style="width: 100px">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-center">Moch Nuril</h5>

                    </div>

                    <ul class="list-group list-group-flush text-left text-primary">
                        <li class="list-group-item text-black">                            
                            <i class="fas fa-search fa-1x"></i> &nbsp;
                            <a href="">Cari Lowongan Kerja</a>                            
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-file-signature fa-1x"></i> &nbsp;
                            <a href="">Lamaran Kerja</a>                            
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-user fa-1x"></i> &nbsp;
                            <a href="">Profile</a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-info-circle fa-1x"></i> &nbsp;
                            <a href="">Bantuan</a>
                        </li>
                    </ul>

                </div>




            </div>
            <div class="col-md-7 col-sm-12 mt-5 ">
                <table class="table table-responsive-sm">
                    <h2>Dashboard</h2>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul Lamaran</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Offer</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>ID1</td>
                            <td>Laraman</td>
                            <td>judul</td>
                            <td>sudah</td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-success">Update</button>
                            </td>
                        </tr>

            </div>

            <div class="clear"> </div>


        </div>
    </div>

</body>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>