<?php
    // include 'controllers/Route.php';
  
    include('controllers/dbConfig.php');
    // $db = new dbConfig(); //Buka koneksi database

    

$request = $_SERVER['REQUEST_URI'];

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
        include './controllers/AuthControllers.php';
        $auth = new AuthControllers();


        $condition = $_GET['act'];
        
        if ($condition == 'register'){            
            $register = $auth->register($_POST['username'],$_POST['email'],$_POST['password']);
            // header("location:/");
            if ($register) {
                 // Registration Success
                 echo 'Registration successful <a href="/">Click here</a> to login';
                 } else {
                 // Registration Failed
                 echo 'Registration failed. Email or Username already exits please try again';
                 }
                
        }
        


        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}

?>

