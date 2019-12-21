<?php    
    class Connection{
        public $db;

        public function __construct(){
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            if(mysqli_connect_errno()){
                printf("Connect failed: %s\n", mysqli_connect_error());
            }
        }   

    }

?>
