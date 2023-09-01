
<?php 

include 'header.php';

?>
<div class='content'>
    <h1>Edit Record</h1>
   
    <div class='form-container'>
    <?php 
    include "connection.php";
    $stu_id=$_GET['id'];

    $sql="SELECT  *  FROM student WHERE sid={$stu_id}";
    $result=mysqli_query($conn,$sql) or die('Query unsuccessfull');
    if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result))
     {
    
    ?>
    <form action="updatedata.php" method="POST">
      <div class="form-group">
         <label>Name</label>
         <input type='hidden' name='id' value="<?php echo $row['sid']; ?>">
         <input type="text" name="name" value="<?php echo $row['sname']; ?>"><br>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?php echo $row['saddress']; ?>"><br>
      </div>
      <div class="form-group">
          <label>Class</label>
    <?php 
       $sql1="SELECT * FROM studentclass";
       $result1=mysqli_query($conn,$sql1) or die('query unsuccessful');
       if(mysqli_num_rows($result1)>0){
        echo "<select name='class'>
               <option>Select Class</option>";
        while($row1=mysqli_fetch_assoc($result1))
        {
            if($row['sclass']==$row1['cid'])
            {
                $select="selected";
            }
            else{
                $select="";
            }
            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
        }
        echo "</select><br>";

       }
    ?>
          
                
            
         
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $row['sphone']; ?>"><br>
      </div>
      <div class="submit">
          <input  class="btn" type="submit" name="submit" value="UPDATE">
      </div>

    </form>
     <?php 
        } 
    }
     
     ?>
    </div>

</div>
</div>