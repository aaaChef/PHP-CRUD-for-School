<?php
include "connectdb.php";
class updatecl extends connectcl{
    public function updateprocessing($pid,$pname,$pemail,$page){
        $conn=$this->connectMe();
        $qry="update student set name='$pname',email='$pemail',age=".(int)$page." where id=".(int)$pid.";";
        $result= $conn->query($qry);
        if ($result){
            header ("location:index.php");
        }
        else {
            echo"error, falied to update";
        }


    }



}



if (isset($_POST['update'])){
$pid=$_POST['uid'];
$pname=$_POST['uname'];
$pemail=$_POST['uemail'];
$page=$_POST['uage'];

$utemp=new updatecl();
$utemp->updateprocessing($pid,$pname,$pemail,$page);

}

?>
