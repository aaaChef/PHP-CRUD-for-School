<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .place{
        margin-left:50px;
    }
    .middle{
        margin-left:7%;
    }

    </style>
</head>

<body style="background-color: #d5dce2;margin:20px auto;margin-left:30%;margin-top:10%;">
<h1>Welcome to Binyam Boarding School</h1>

    <div class="place">
    <form action="readform.php" method="post">
    <input type="text" name="name"  placeholder="name"><br>
    <input type="text" name="email"  placeholder="email"><br>
    <input type="text" name="age"  placeholder="age"><br>
    <input type="submit" value="Add Student" name="save" style=' color: black;background-color:yellow' class="middle">
    </form>
    </div>
</body>
</html>

<?php
include "fetchdata.php";
?>