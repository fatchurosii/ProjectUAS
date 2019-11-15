
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Job Seekers</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css"/>
      
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
                                <a class="nav-link" href="/">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/employeer" >Employee Area</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/search" >Cari Kerja</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-primary btn-sm roundeds mr-2" id="login" data-toggle="modal" data-target="#modalLogin">Login</button>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-primary btn-sm roundeds mr-2 " data-toggle="modal" data-target="#modalReg">Register</button>
                            </li>

                        </ul>
                        
                    </div>
                  
                    
                    
                    </div>
                </nav>
            </div>
                    <!-- Modal Login -->
                <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
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
                        <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input type="email" name="" class="form-control" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="" class="form-control"placeholder="Masukkan Password Anda">
                        </div>
                        
                    </form>
                    </div>
                    <!--Footer-->
                    <div class="text-center mb-3">
                    <button type="submit "class="btn btn-primary round mb-3">Login</button>
                    <br>
                    <a class="text"href="">Dont Have Any Account ? Sign Up Now!</a>
                    <br>
                    <a class="text "href="">Forgot Password?</a>
                    </div>
                    </div>
                    <!--/.Content-->
                </div>
                </div>
                <!-- Modal -->

                    <!-- End Modal Login -->

                    <!-- ModalReg -->
                    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
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
                        <form action='/register?act=register' method="post">

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
                        </div>
                    <!--Footer-->
                    <div class="text-center mb-3">
                        <input type="submit" name="submit" value="Register" class="btn btn-primary round mb-3"/>
                    <br>
                    <a class="text"href="">Already have Account ? Sign In Now!</a>
                    </div>    
                    </form>
                    
                    </div>
                    <!--/.Content-->
                </div>
                </div>
                    <!-- End Modal Reg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="text-banner">
                            <h1 class="text1"> Cari Lowongan Kerja </h1>
                            <h1 class="text2"> Terlengkap dan Termudah </h1>
                            
                            <h2 class="text3"> Pasang Lowongan Sekarang Gratis </h2>
                            
                            <a class="btn btn-primary btn-lg custom-rounded text-white">Pasang Iklan</a>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-12">
                        <div class="img-banner">
                            <img class="" src="assets/img/logo.jpeg">   
                        </div>
                    </div>
                
                </div>

                <div class="clear"> </div>

                <div align="center" class="searchbox">
                    <form action="#" method="post">
                        <div class="row">

                            <div class="col-md-3">
                                <input class="form-control" name="kategori" type="text" placeholder="Kategori Pekerjaan">
                            </div>

                            <div class="col-md-3">
                                <input class="form-control" name="posisi" type="text" placeholder="Posisi">
                            </div>
                                

                            <div class="col-md-3">
                                <input class="form-control" name="lokasi" type="text" placeholder="Lokasi">
                            </div>
                            
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-sm" type="button" type="text"> <i class="fas fa-search fa-2x"></i> </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                
                
            </div>

        </body>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>