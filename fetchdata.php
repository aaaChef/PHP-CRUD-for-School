<?php
include "connectdb.php";
class fetchdata extends connectcl{

public function displaydata(){

    $conn=$this->connectMe();
    $qry="select * from student; ";
    $result= $conn->query( $qry);
    
if ($result->num_rows >0){
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body style="background-color: #d5dce2;margin:20px auto;margin-left:30%;">
 <table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>age</th>
<th>update</th>
<th>delete</th>
</tr>
<?php
while ($rows=$result->fetch_assoc()){
$id=$rows['id'];
$name=$rows['name'];
$email=$rows['email'];
$age=$rows['age'];
echo "
<tr>
<td>".$id."</td>
<td>".$name."</td>
<td>".$email."</td>
<td>".$age."</td>
<td><button style='background-color:blue'><a style='color:white;'  href='updatepage.php?id=".$id."'>update</a></button></td>
<td><button style='background-color:red'><a style='color:white;'  href='delete.php?id=".$id."'>delete</a></button></td>
</tr>";
}

?>
</table>
 </body>
 </html>       

<?php

echo"<a href='index.php'>go back to registration page</a>";
}else {
    echo"nothing to show here";
}

}


}
$temp=new fetchdata();
$temp->displaydata();


?>