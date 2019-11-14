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
    case '/register':
        // require __DIR__ . '/controllers/AuthControllers.php';
        extract($_REQUEST);

        include './controllers/AuthControllers.php';
        $auth = new AuthControllers();
        
        $auth->register($username,$email,$password);


        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}

?>

