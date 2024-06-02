<?php
include "connectdb.php";
class updatepagecl extends connectcl{
public function updatepagedisplay($dddid){

$conn=$this->connectMe();
$qry="select * from student where id=$dddid;";
$result=$conn->query($qry);
$rows=$result->fetch_assoc();
$ddid=$rows['id'];
$ddname=$rows['name'];
$ddemail=$rows['email'];
$ddage=$rows['age'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="background-color: #d5dce2;margin:20px auto;margin-left:30%;margin-top:10%;">
<form action="update.php" method="post">
<h1>Update Student Info</h1>
    <input type="text" name="uid"  readonly value="<?php echo $ddid ?>"><br>
    <input type="text" name="uname"  value="<?php echo $ddname; ?>"><br>
    <input type="text" name="uemail"  value="<?php echo $ddemail; ?>"><br>
    <input type="text" name="uage"  value="<?php echo $ddage; ?>"><br>
    <input type="submit" value="Save" name="update" style=' color: white;background-color:blue'>
    </form>
</body>
</html>
<?php
}

} 

?>
<?php

$displayUpdateid=$_GET['id'];
$temp=new updatepagecl();
$temp->updatepagedisplay($displayUpdateid);

?>