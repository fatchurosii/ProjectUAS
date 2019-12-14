<?php
class JobControllers
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    }

    public function showJobList()
    {
        $query = "SELECT * from `tbJobList`";

        $result = mysqli_query($this->db, $query);
        $count_row = mysqli_num_rows($result);

        if($count_row>0){
            while ($data = mysqli_fetch_array($result)) {
                $hasil[] = $data;
            }
            return $hasil;
        }else{
            echo 'Data Kosong !';
        }
        
    }
}
