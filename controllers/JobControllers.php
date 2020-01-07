<?php

class JobControllers
{


    public function showJobList()
    {
        $query = "SELECT * from `tbJobList`";
        $result = mysqli_query(Connection::$db, $query);
        $count_row = mysqli_num_rows($result);

        if ($count_row > 0) {
            while ($data = mysqli_fetch_array($result)) {
                $hasil[] = $data;
            }
            return $hasil;
        } else {
            echo 'Data Kosong !';
        }
    }

    public function searchJobList()
    {
        $kategori = $_POST['kategori'];
        $posisi = $_POST['posisi'];
        $lokasi = $_POST['lokasi'];

        if(!empty($kategori) and !empty($posisi) and !empty($lokasi)){
            $query = "SELECT * from `tbJobList` where jobName = '$posisi' and jobCategory = '$kategori' and jobLocation = '$lokasi' ";            
        }else{
            $query = "SELECT * from `tbJobList`";
        }
        
        $result = mysqli_query(Connection::$db,$query);
        $count_row = mysqli_num_rows($result);

        if ($count_row > 0) {
            while ($data = mysqli_fetch_array($result)) {
                $hasil[] = $data;
            }
            return $hasil;
        } else {
            echo 'Data tidak ditemukan !';
        }
    }
}
