<?php
    // include 'controllers/Route.php';
  
    include('controllers/dbConfig.php');
    include('controllers/AuthControllers.php');
    // $db = new dbConfig(); //Buka koneksi database

    

$request = $_SERVER['REQUEST_URI'];

var_dump($request);

switch ($request) {
    case '/' :
    case '' :
        require __DIR__ . '/views/index.php';
        // require __DIR__ . '/views/user/index.php';
        break;
    case '/user' :
        require __DIR__ . '/views/user/index.php';
        break;    
    case '/search':
        require __DIR__ . '/views/user/search-job.php';
        break;
    case '/employeer' :        
        require __DIR__ . '/views/employeer/index.php';
        break;
        // CONTROLLER LOGIC
    case '/register?act=register':
        // require __DIR__ . '/controllers/AuthControllers.php'; 
        $auth = new AuthControllers();


        $condition = $_GET['act'];
        
        if ($condition == 'register'){            
            $register = $auth->register($_POST['username'],$_POST['email'],$_POST['password']);
            // header("location:/");
                if ($register) {
                 // Registration Success
                                
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Berhasil mendaftar !");'; 
                    echo 'window.location.href = "/";';
                    echo '</script>';

                
                } else {
                
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Email atau Username telah terdaftar !");'; 
                    echo 'window.location.href = "/";';
                    echo '</script>';
                
               

                 }
                
         }
        break;
    case '/login':
         $auth = new AuthControllers();
         $email= $_POST['email'];
         $password= $_POST['password'];
         $login = $auth->login($email, $password);
            if ($login) {
                // Registration Success
            echo 'loginsucces';
            } else {
                // Registration Failed
                echo 'Wrong username or password';
            }
    break;
         
       
    default:
        require __DIR__ . '/views/404.php';
        break;
}

?>

