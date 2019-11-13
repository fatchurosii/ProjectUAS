<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
    case '' :
        require(__DIR__ . '../views/index.php');        
        break;
    case '/user' :
        require __DIR__ . ' ../views/user/index.php';
        break;    
    case '/search':
        require __DIR__ . '../views/user/search-job.php';
        break;
    case '/employeer' :
        require __DIR__ . '../views/employeer/index.php';
        break;
    default:
        
        // require __DIR__ . 'index.php';
        break;
}

?>