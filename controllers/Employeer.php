<?php

require_once "UserControllers.php";

class Employeer extends UserControllers
{
    //Enkasulapsi field dari post

    private $id_employeer;
    private $posisi;
    private $kategori;
    private $deskripsi;
    private $lokasi;
    private $salary;

    public function getID()
    {
        return $this->id_employeer = $_POST['id_employeer'];
    }
    public function getPosisi()
    {
        return $this->posisi = $_POST['posisi'];
    }
    public function getKategori()
    {
        return $this->kategori = $_POST['kategori'];
    }
    public function getDeskripsi()
    {
        return $this->deskripsi = $_POST['deskripsi'];
    }
    public function getLokasi()
    {
        return $this->lokasi = $_POST['lokasi'];
    }
    public function getSalary()
    {
        return $this->salary = $_POST['salary'];
    }

    // OVERRIDING
    function createLowongan()
    {
        $id = $this->getID();
        $posisi = $this->getPosisi();
        $kategori = $this->getKategori();
        $deskripsi = $this->getLokasi();
        $lokasi = $this->getLokasi();
        $salary = $this->getSalary();

        // $query1 = "INSERT INTO `tbJobList` (`idEmployeer`,`jobName`,`jobCategory`,`jobDesc`,`jobLocation`,`jobSalary`) VALUES ('$this->getID()','$this->getPosisi()','$this->getKategori()','$this->getDeskripsi()','$this->getLokasi()','$this->getSalary()')";
        $query1 = "INSERT INTO `tbJobList` (`idEmployeer`,`jobName`,`jobCategory`,`jobDesc`,`jobLocation`,`jobSalary`) VALUES ('$id','$posisi','$kategori','$deskripsi','$lokasi','$salary')";
        $result = Connection::$db->query($query1);

        return $result;
    }

    //OVERRIDING
    function initBio($id)
    {
        $query2 = "INSERT INTO `tbEmployeer` (`tokenID`,`fullName`,`address`,`phoneNumber`,`companyName`,`jobTitle`,`image`) VALUES ('$id','null','null','0','null','null','null') ";
        $result = Connection::$db->query($query2);
        
        return $result;
    }
}
