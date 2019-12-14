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
                                <button class='btn btn-primary btn-sm mr-2'>Login</button>
                            </li>
                            <li class='nav-item'>
                                <button class='btn btn-primary btn-sm  mr-2'>Register</button>
                            </li>";
                            } else { }
                            ?>


                    </ul>

                </div>

            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="searchbox">
                    <form action="#" method="post">
                        <div class="d-flex flex-column flex-md-row">
                            <input class="form-control" name="kategori" type="text" placeholder="Kategori Pekerjaan">
                            <input class="form-control" name="posisi" type="text" placeholder="Posisi">
                            <input class="form-control" name="lokasi" type="text" placeholder="Lokasi">
                            <button class="btn btn-primary btn-sm " type="submit" type="text"> <i class="fas fa-search fa-2x"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="row">
            <?php
            foreach ($search->showJobList() as $x) {
                ?>
                <div class="col-md-3 ml-5 mr-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text"><?php echo $x['jobName']; ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>




            <div class="col-md-3 mr-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>








</body>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>