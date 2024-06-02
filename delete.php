<?php
include "connectdb.php";
class deletecl extends connectcl{
    public function deletedata($did){


        $conn=$this->connectMe();
        $qry="delete from student where id=$did;";
        $result= $conn->query($qry);
        if ($result){
            header ("location:index.php");
        }
        else {
            echo"error, falied to delete";
        }

    }



}




$deleteid=$_GET['id'];
$dtemp=new deletecl();
$dtemp->deletedata($deleteid);

?>