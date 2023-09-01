<?php
  $id=$_POST['id'];
  $name=$_POST['name'];
  $address=$_POST['address'];
  $class=$_POST['class'];
  $phone=$_POST['phone'];

  include "connection.php";
$sql="UPDATE  student SET sname='{$name}', saddress='{$address}', sclass='{$class}', sphone='{$phone}' WHERE sid={$id}";
$result=mysqli_query($conn,$sql) or  die('query unsuccessful');
header("Location:http://localhost/php_project/index.php");
mysqli_connect($conn);

?>