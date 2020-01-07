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
                                <button class="btn btn-gradient-info btn-block btn-sm  mr-2">Cari Kerja</button>
                            </li>
                            <li class="nav-item ml-2">
                                <button class="btn btn-gradient-danger btn-block btn-sm  mr-2 ">Logout</button>
                            </li>

                        </ul>

                    </div>

                </div>
            </nav>
        </div>


        <div class="container">
            <div class="d-flex flex-column mt-5 sm-12 justify-content-center">
                <div class="dashboard-user">
                <div class="Judul mb-3"><h3>Daftar Lamaran Kerjamu</h3></div>
                       <div class="row">
                          
                       <div class="col-md">
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lamaran</th>
                                <th scope="col">Create Date</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Penjaga Wifi</td>
                                <td>Bumi,30 Februari 2020</td>
                                <td>PT. Mencari Cinta Sejati</td>
                                <td>Tidak Tahu</td>
                                <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Delete</button></td>
                                </tr>
 
                            </tbody>
                            </table>

                         
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