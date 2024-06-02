<?php
class connectcl {

private $sname;
private $suser;
private $spass;
private $sdb;
public function __construct(){
$this->sname="localhost";
$this->suser="root";
$this->spass="";
$this->sdb="school";
}
protected function connectMe(){
    $conn=new mysqli ($this->sname,
    $this->suser,
    $this->spass,
    $this->sdb);

    if ($conn->connect_error){
        die("databse failed to connect due to".$conn->error);
    }
    else{
      return $conn;
    }
   



}



}


?>