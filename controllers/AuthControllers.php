<?php

    include '../controllers/dbConfig.php';
    
    class AuthControllers{
        public $db;

        public function __construct(){
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        }   

        function register($username,$email,$password,$roles){
            
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $roles = $_POST['roles'];

            
            $hash = password_hash($password, PASSWORD_DEFAULT);  //Hashing dengan bcrypt
                  
			$query="SELECT * FROM tbAuth WHERE username='$username' OR email='$email'";
           
			//Cek username
			$check =  $this->db->query($query) ;
            $count_row = $check->num_rows;
            
            // $count_row = mysqli_num_rows($check);
 
            //Jika belum ada username yang terdaftar makan akan memproses pendaftaran

			if ($count_row == 0){

                $query1="INSERT INTO `tbAuth` (`username`,`email`,`password`,`roles`) VALUES ('$username','$email','$hash','$roles')";

                $result = mysqli_query($this->db,$query1) or die(mysqli_connect_errno()."Error : ".mysqli_error($this->db));                    
                             
                return $result;
			}
			else { 
                
                return false;
            }
        }
        
        public function login ($email, $password){

			$query="SELECT * from `tbAuth` WHERE `email`='$email' ";                        
            
            
            $result = mysqli_query($this->db,$query);
            
            // $user_data = mysqli_fetch_array($result);
            
            // $count_row = $result->num_rows;

            $count_row = mysqli_num_rows($result);
 
	        if ($count_row == 1) {
                
                $row = mysqli_fetch_assoc($result);

                if(password_verify($password,$row['password'])){
                    session_start();
                    
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $email;
                    $_SESSION['roles'] = $row['roles'];

	                $_SESSION['login'] = TRUE;
                    // $_SESSION['id'] = $row['id'];
                    
                    return true;
                    
                }else{
                    echo "Password salah !";
                }
                
	            
	        }
	        else{
			    return false;
			}
        }


        public function get_session(){
            
             return $_SESSION['login'];
            
        }
                    
        public function getLogout() {
        
            $_SESSION['login'] = FALSE;            
            
            session_start();

            session_destroy();

            header("location:/");

        }
        
    }    
?>