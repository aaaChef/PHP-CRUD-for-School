<?php
include "connectdb.php";
class insertcl extends connectcl{
    
    public function insertdata($name,$email,$age){

        $conn=$this->connectMe();
        $qry="insert into  student(name,email,age) values ('$name','$email',$age) ; ";
        $result= $conn->query( $qry);
        if ($result){
            header("location:fetchdata.php");
        }
        else{
            echo "error";
        }

    }
   



}


?>