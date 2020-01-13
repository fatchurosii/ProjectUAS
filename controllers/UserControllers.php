<?php

class UserControllers
{
    public function initBio($id)
    {
        $query = "INSERT INTO `tbJobseeker` (`tokenID`,`fullName`,`address`,`phoneNumber`) VALUES ('$id','null','null','0') ";
        $result = Connection::$db->query($query);

        return $result;
    }

    // Job Logic 

    public function showJobList()
    {
        $query = "SELECT * from `tbJobList`";
        $result = Connection::$db->query($query);
        $count_row = $result->num_rows;

        if ($count_row > 0) {
            while ($data = $result->fetch_array()) {
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
        $count_row = $result->num_rows;

        if ($count_row > 0) {
            while ($data = $result->fetch_array()) {
                $hasil[] = $data;
            }
            return $hasil;
        } else {
            echo 'Data tidak ditemukan !';
        }
    }





    //Untuk create lowongan
    public function createLowongan()
    {
        $query = "INSERT INTO `tbJobList` (`idEmployeer`,`jobName`,`jobCategory`,`jobDesc`,`jobLocation`,`jobSalary`) VALUES ('null','null','null','null')";
        $result = Connection::$db->query($query);

        if ($result) {
            return $result;
        } else {
            return False;
        }
    }


    //Digunakan untuk overloading
    public function __call($name, $args)
    {
        switch ($name) {
            case 'dataLamaran':
                switch (count($args)) {
                    case 0:
                        return $this->getDataLamaranAll();
                        break;
                    case 1:
                        return call_user_func_array(array($this, 'getDataLamaranEmployeer'), $args);
                        break;
                }
            case 'dataPelamar':
                return call_user_func_array(array($this, 'getDataPelamar'), $args);
                break;
            case 'countdataLamaran':
                return call_user_func_array(array($this, 'getCountLamaranEmployeer'), $args);
                break;
            case 'countdataLowongan':
                return call_user_func_array(array($this, 'getCountLowonganEmployeer'), $args);
                break;
        }
    }

    private function getDataLamaranAll()
    {
        $query = "SELECT * from `tbJobList` INNER JOIN `tbJobJoin` ON tbJobList.id = tbJobJoin.idJob ";

        $result = Connection::$db->query($query);
        $count = $result->num_rows;
        if ($count > 0) {

            while ($data = $result->fetch_array()) {
                $hasil[] = $data;
            }

            return $hasil;
        } else {
            echo 'Data tidak ada !';
        }
    }

    private function getDataLamaranEmployeer($idEmployeer)
    {
        $query = "SELECT * from `tbJobList` LEFT JOIN `tbJobJoin` ON tbJobList.id = tbJobJoin.idJob where `idEmployeer` = '$idEmployeer' ";
        $result = Connection::$db->query($query);
        $count = $result->num_rows;

        if ($count > 0) {

            while ($data = $result->fetch_array()) {
                $hasil[] = $data;
            }

            return $hasil;
        } else {
            echo 'Data tidak ada !';
        }
    }

    private function getCountLowonganEmployeer($idEmployeer)
    {
        $query = "SELECT * from `tbJobList` where `idEmployeer` = '$idEmployeer' ";
        $result = Connection::$db->query($query);
        $count = $result->num_rows;
        return $count;
    }

    private function getDataPelamar($idEmployeer)
    {
        $query = "SELECT * from `tbJobList` INNER JOIN `tbJobJoin` ON tbJobList.id=tbJobJoin.idJob INNER JOIN tbJobseeker ON tbJobseeker.tokenID = tbJobJoin.idJobseeker  where idEmployeer = '$idEmployeer' ";
        $result = Connection::$db->query($query);
        $count = $result->num_rows;

        if ($count > 0) {

            while ($data = $result->fetch_array()) {
                $hasil[] = $data;
            }

            return $hasil;
        } else {
            echo 'Data tidak ada !';
        }
    }
    private function getCountLamaranEmployeer($idEmployeer)
    {
        $query = "SELECT * from `tbJobList` INNER JOIN `tbJobJoin` ON tbJobList.id = tbJobJoin.idJob where `idEmployeer` = '$idEmployeer' ";
        $result = Connection::$db->query($query);
        $count = $result->num_rows;
        return $count;
    }
}
