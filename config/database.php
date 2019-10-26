<?php
    class database {

        var $host = "localhost";
        var $username = "root";
        var $pass = "";
        var $db = "jobseeke";
    }

    function __construct() {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->host, $this->username, $this->pass, $this->db);
            
            if (!$this->connection) {
                echo '<div> Cannot connect to database server</div>';
                exit;
            }            
        }    
        
        return $this->connection;
        }
    

?>
