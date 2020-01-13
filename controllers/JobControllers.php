<?php

class JobControllers
{


    public function showJobList()
    {
        $query = "SELECT * from `tbJobList`";
        $result = Connection::$db->query($query);
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

        if (!empty($kategori) and !empty($posisi) and !empty($lokasi)) {
            $query = "SELECT * from `tbJobList` where jobName = '$posisi' and jobCategory = '$kategori' and jobLocation = '$lokasi' ";
        } else {
            $query = "SELECT * from `tbJobList`";
        }

        $result = Connection::$db->query($query);
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

    public function joinJob($idJob, $idJobseeker)
    {
        $query_check = "SELECT * from `tbJobJoin` where `idJob` = '$idJob' and `idJobseeker` = '$idJobseeker' ";
        $result_check = Connection::$db->query($query_check);
        $count_row = $result_check->num_rows;
        
        if ($count_row > 0) {
            return false;
        } else {
            $query = "INSERT INTO `tbJobJoin` (`idJob`,`idJobseeker`) VALUES ('$idJob','$idJobseeker')";
            $result = Connection::$db->query($query)  or die (mysqli_connect_errno()."Error : ".mysqli_error(Connection::$db));            
            return $result;
        }
        
    }
}
