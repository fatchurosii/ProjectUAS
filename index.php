<?php
// INI ADALAH FILE ROUTING UNTUK VIEW DAN CONTROLLERS

//NOTE : CUKUP DEKLARASIKAN CLASS DISINI KARENA INI ADALAH ROUTER

// include('controllers/dbConfig.php');
require_once './controllers/dbConfig.php';
require_once './controllers/Connection.php';

// include('controllers/Connection.php');
include('controllers/AuthControllers.php');
include('controllers/JobControllers.php');

$conn = new Connection();
$search = new JobControllers();
$auth = new AuthControllers();
// Menyimpan request url
$request = $_SERVER['REQUEST_URI'];



switch ($request) {
    case '/':
    case '':
        require __DIR__ . '/views/index.php';
        break;
    case '/user':
        require __DIR__ . '/views/user/index.php';
        break;
    case '/search':
        require __DIR__ . '/views/user/search-job.php';
        break;
    case '/search?params':
        require __DIR__ . '/views/user/search-job.php';
        break;
    case '/search?action=lamar':
        $idJob = $_POST['idJob'];
        $idJobseeker = $_POST['idJobseeker'];

        $lamar = $search->joinJob($idJob, $idJobseeker);

        if ($lamar) {
            echo '<script type="text/javascript">';
            echo 'alert("Berhasil memproses lamaran anda !");';
            echo 'window.location.href = "/search";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Anda sudah melamar pekerjaan ini !");';
            echo 'window.location.href = "/search";';
            echo '</script>';
        }
        break;
    case '/employeer':
        require __DIR__ . '/views/employeer/index.php';
        break;
    case '/buatlamaran':
        require __DIR__ . '/views/employeer/lamaran.php';
        break;
        // CONTROLLER LOGIC
    case '/register?act=register':
        $condition = $_GET['act'];

        if ($condition == 'register') {
            $register = $auth->register($_POST['username'], $_POST['email'], $_POST['password'], $_POST['roles']);

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
    case '/register?act=registerEmployeer':
        $condition = $_GET['act'];

        if ($condition == 'registerEmployeer') {
            $registerEmployeer = $auth->register($_POST['username'], $_POST['email'], $_POST['password'], $_POST['roles']);

            if ($registerEmployeer) {
                // Registration Success
                echo '<script type="text/javascript">';
                echo 'alert("Berhasil mendaftar !");';
                echo 'window.location.href = "/employeer";';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Email atau Username telah terdaftar !");';
                echo 'window.location.href = "/employeer";';
                echo '</script>';
            }
        }

        break;

    case '/login':


        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            $login = $auth->login($email, $password);
            if ($login) {


                echo '<script type="text/javascript">';
                echo 'alert("Login Success !");';
                echo 'window.location.href = "/";';
                echo '</script>';
            } else {

                echo '<script type="text/javascript">';
                echo 'alert("Email/Password tidak terdaftar !");';
                echo 'window.location.href = "/";';
                echo '</script>';
            }
        }

        break;
    case '/loginEmployeer':

        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            $login = $auth->login($email, $password);
            if ($login) {


                echo '<script type="text/javascript">';
                echo 'alert("Login Success !");';
                echo 'window.location.href = "/employeer";';
                echo '</script>';
            } else {

                echo '<script type="text/javascript">';
                echo 'alert("Email/Password tidak terdaftar !");';
                echo 'window.location.href = "/employeer";';
                echo '</script>';
            }
        }

        break;

    case '/logout':

        $auth->getLogout();

        break;
    case '/user/lamaran':
        require __DIR__ . '/views/user/lamaran.php';
        break;
    case '/user/setting':
        require __DIR__ . '/views/user/setting.php';
        break;

    case '/search/job-detail':
        require __DIR__ . '/views/user/job-detail.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
