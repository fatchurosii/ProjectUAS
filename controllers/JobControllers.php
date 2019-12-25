<?php

class JobControllers {


    public function showJobList()
    {
        $db = new Connection();
        $query = "SELECT * from `tbJobList`";        
        $result = mysqli_query($db->db, $query);
        $count_row = mysqli_num_rows($result);
        
        if ($count_row > 0) {
            while ($data = mysqli_fetch_array($result)) {
                $hasil[] = $data;
            }
            return $hasil;
        } else {
            echo 'Data Kosong !' ;
        }
    }
}
