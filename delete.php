
<?php 

include 'header.php';

?>
<div class='content'>
    <h1 class="add-heading">Delete Record</h1>
   
    <div class='form-container'>
       <form class="delete-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
         <div class="form-group">
           <label>Id</label>
           <input type="text" name="form_id"><br>
         </div>
         <div class="submit">
             <input  class="btn" type="submit" name="showbtn" value="submit">
         </div>

        </form>
    
     <?php
     if(isset($_POST['showbtn']))
        {
        $stu_id=$_POST['form_id'];
        include "connection.php";
        $sql="DELETE FROM student WHERE sid={$stu_id}";
        $result=mysqli_query($conn,$sql) or  die('query unsuccessful');

        header("Location:http://localhost/php_project/index.php");

        mysqli_connect($conn);

        }
    
     ?>


    </div>

</div>
</div>