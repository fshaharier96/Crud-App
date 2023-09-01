<?php
echo $name=$_POST['name'];
echo $address=$_POST['address'];
echo $class=$_POST['class'];
echo $phone=$_POST['phone'];


include "connection.php";
$sql="INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$name}','{$address}','{$class}','{$phone}')";
$result=mysqli_query($conn,$sql) or  die('query unsuccessful');
header("Location:http://localhost/php_project/index.php");
mysqli_connect($conn);
?>