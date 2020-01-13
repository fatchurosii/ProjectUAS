<?php        
        
    class AuthControllers {
  
    
        function register(){
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $roles = $_POST['roles'];

            
            $hash = password_hash($password, PASSWORD_DEFAULT);  //Hashing dengan bcrypt
                  
			$query="SELECT * FROM tbAuth WHERE username='$username' OR email='$email'";
           
			//Cek username
			$check = Connection::$db->query($query);
            $count_row = $check->num_rows;
            
            // $count_row = mysqli_num_rows($check);
 
            //Jika belum ada username yang terdaftar makan akan memproses pendaftaran

			if ($count_row == 0){

                $query1="INSERT INTO `tbAuth` (`username`,`email`,`password`,`roles`) VALUES ('$username','$email','$hash','$roles')";

                $result = mysqli_query(Connection::$db,$query1) or die(mysqli_connect_errno()."Error : ".mysqli_error(Connection::$db));                    
                
                
                return $result;
			}
			else { 
                
                return false;
            }
        }
        
        public function login ($email, $password){
            

			$query="SELECT * from `tbAuth` WHERE `email`='$email' ";                                                
            $result = Connection::$db->query($query);
            
            $count_row = $result->num_rows;
 
	        if ($count_row == 1) {
                
                $row = mysqli_fetch_assoc($result);

                if(password_verify($password,$row['password'])){
                    session_start();
                    
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $email;
                    $_SESSION['roles'] = $row['roles'];                    
	                $_SESSION['login'] = TRUE;

                    
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
