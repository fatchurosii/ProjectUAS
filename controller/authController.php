<?php
    class authController{
        private $db; //Menyimpan isi koneksi database
        private $error_msg;


        function __construct($db){
            $this->db = $db;
            session_start();
        }


        public function register($username,$email,$password){
            try{
                $hashPwd = password_hash($password,PASSWORD_DEFAULT);

                $query= $this->db->prepare("INSERT INTO tbAuth(username,email,password)VALUES(:username,:email,:password)");
                $query->bindParam(":username",$username);
                $query->bindParam(":email",$email);
                $query->bindParam(":password",$hashPwd);

                $query->execute();
                
                return true;

            }catch(PDOException $e){
                if($e->errorInfo[0] == 23000){
                    //errorInfo[0] berisi informasi error pada query sql
                    //23000 validasi data jika ada data sama pada unique 
                    $this->error_msg="Email sudah digunakan";
                    return false;
                }else{
                    echo $e->getMessage();
                    return false;
                }

            }
        }




        public function login($email,$password){
            try{
                $query = $this->db->prepare("SELECT * FROM tbAuth WHERE email = :email");
                $query->bindParam(":email",$email);
                
                $query->execute();

                $data=$query->fetch(); //Memanggil atau fetching row email 

                if($query->rowCount() > 0){ //Kondisi jika ada datanya

                    if(password_verify($password,$data['password'])){ //Kondisi memanggil PHP PDO Function untuk verify password

                        $_SESSION['user_session'] = $data['id']; //Memulai session berdasarkan id pengguna

                        return true;
                    }else{
                        $this->error_msg="Email atau Password Salah";

                        return false;
                    }

                }else{
                    $this->error_msg="Data anda tidak ada , silahkan mendaftar terlebih dahulu ";
                    
                    return false;
                }

            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        // Check untuk apakah user tersebut masih login
        public function isLoggedIn(){
            if(isset($_SESSION['user_session'])){
                return true;
            }
        }

        public function getUser(){
            if(!$this->isLoggedIn()){
                return false;
            }

            try{
                //TODO LANJUT
            }catch(PDOException $e){
                echo $e->getMessage();

                return false;
            }
        }








    }



?>