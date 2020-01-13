<?php    
    class Connection{
        public static $db;

        public function __construct(){
            self::$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            if($this->db->connect_error){
                die("Connection failed : " . $this->connect_error);
            }
                                    
            
        }   

    }
    
    
    // $db  = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    // if(mysqli_connect_errno()){
    //     printf("Connect failed: %s\n", mysqli_connect_error());
    // }

?>
