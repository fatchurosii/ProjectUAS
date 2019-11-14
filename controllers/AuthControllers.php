<?php

    include '/controllers/dbConfig.php';
    
    class AuthControllers{
        public $db;

        public function __construct(){
            $this->db = new dbConfig();            
            extract($_REQUEST);
            echo 'TES REQ';
            echo $username;
            echo $email;
            echo $password;
        }   

        public function register($username,$email,$password){
 
            $password = md5($password);
            
			$query="SELECT * FROM tbAuth WHERE username='$username' OR email='$email'";
 
			//Cek username
			$check =  $this->db->query($query) ;
			$count_row = $check->num_rows;
 
            //Jika belum ada username yang terdaftar makan akan memproses pendaftaran
            
			if ($count_row == 0){

                $sql1="INSERT INTO tbAuth SET username='$username', password='$password', email='$email'";
                
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                
        		return $result;
			}
			else { 
                return false;
            }
        }
        
    }    
?>