<?php

class Jobseeker extends UserControllers
{
    public function joinJob($idJob, $idJobseeker)
    {
        $query_check = "SELECT * from `tbJobJoin` where `idJob` = '$idJob' and `idJobseeker` = '$idJobseeker' ";
        $result_check = Connection::$db->query($query_check);
        $count_row = $result_check->num_rows;

        if ($count_row > 0) {
            return false;
        } else {
            $query = "INSERT INTO `tbJobJoin` (`idJob`,`idJobseeker`) VALUES ('$idJob','$idJobseeker')";
            $result = mysqli_query(Connection::$db, $query) or die(mysqli_connect_errno() . "Error : " . mysqli_error(Connection::$db));
            return $result;
        }
    }
}
