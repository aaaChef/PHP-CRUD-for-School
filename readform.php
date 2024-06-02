<?php
include "insert.php";
if (isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
$temp=new insertcl();
$temp->insertdata($name,$email,$age);

}




?>