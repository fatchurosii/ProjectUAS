<?php

    include '../controllers/dbConfig.php';
    
    class AuthControllers{
        public $db;


        public function __construct(){
<<<<<<< HEAD
            $this->db = new dbConfig();          
            // extract($_REQUEST);
            // echo 'Die Dump';
            // echo '<br>';
            // echo $username;
            // echo '<br>';
            // echo $email;
            // echo '<br>';
            // echo $password;
            // echo '<br>';
            // echo $password = md5($password);
            
            $condition = $_GET['act'];
            // echo $condition;
            // echo $_POST['username'];
            // echo $_POST['email'];
            // echo $_POST['password'];
=======
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

>>>>>>> 987252d0e1b635fa7a53d7eb0d2e6b64a2a10cb1
        }   

        function register($username,$email,$password){
            
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            
            $password = md5($password);        
			$query="SELECT * FROM tbAuth WHERE username='$username' OR email='$email'";
           
			//Cek username
			$check =  $this->db->query($query) ;
			$count_row = $check->num_rows;
 
            //Jika belum ada username yang terdaftar makan akan memproses pendaftaran

			if ($count_row == 0){

                $query1="INSERT INTO `tbAuth` (`username`,`email`,`password`) VALUES ('$username','$email','$password')";

                $result = mysqli_query($this->db,$query1) or die(mysqli_connect_errno()."Error : ".mysqli_error($this->db));                    
                             
                return $result;
			}
			else { 
                
                return false;
            }
        }
        public function login($email, $password){
             
            
                        $query="SELECT * from tbAuth t WHERE t.email=$email and t.password=$password";
                        $result = mysqli_query($this->db,$query);
                        $user_data = mysqli_fetch_array($result);          
                        $count_row = $result->num_rows;
            
             
            
                        if ($count_row == 1) {
            
                            // this login var will use for the session thing
            
                            $_SESSION['login'] = true;
            
                            $_SESSION['id'] = $user_data['id'];
            
                            return true;
            
                        }
            
                        else{
            
                            return false;
            
                        }
           
                    }

        
    }    
?>