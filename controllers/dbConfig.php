<?php 
class dbConfig{

	var $host = "localhost";
	var $username = "root";
	var $password = "3limin@teD";
	var $database = "jobseeker";
     var $koneksi = ""; //Untuk menampung koneksi
     
	function __construct(){

          $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);

          if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
     }
     

	
}
?>