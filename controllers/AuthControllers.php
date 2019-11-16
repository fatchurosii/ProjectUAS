<?php

    include '/controllers/dbConfig.php';
    
    class AuthControllers{
        public $db;


        public function __construct(){
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
        }   

        function register($username,$email,$password){
 
            $password = md5($password);
            
			$query="SELECT * FROM tbAuth WHERE username='$username' OR email='$email'";
            
			//Cek username
			$check =  $this->db->query($query) ;
			$count_row = $check->num_rows;
 
            //Jika belum ada username yang terdaftar makan akan memproses pendaftaran
            
			if ($count_row == 0){

                $query_register="INSERT INTO tbAuth SET username='$username', password='$password', email='$email'";
                
                $result = mysqli_query($this->db,$query_register) or die(mysqli_connect_errno()."Data cannot be inserted");
                
        		return $result;
			}
			else { 
                echo 'Email anda sudah terdaftar !';
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