<?php
$stu_id=$_GET['id'];

include "connection.php";

$sql="DELETE FROM student WHERE sid={$stu_id}";
$result=mysqli_query($conn,$sql) or  die('query unsuccessful');
header("Location:http://localhost/php_project/index.php");
mysqli_connect($conn);


?>