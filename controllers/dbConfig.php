<?php
    try{ 

         $con = new PDO('mysql:host=localhost;dbname=jobseeker', 'root', 'toor', array(PDO::ATTR_PERSISTENT => true)); 
    } 

    catch(PDOException $e){ 

         echo $e->getMessage(); 
    } 

    include_once 'AuthController.php'; 

    $user = new AuthController($con); 

?>
