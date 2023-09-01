<?php 

include 'header.php';

?>
<div class='content'>
    <h1 class="add-heading">Add New Record</h1>
    <div class='form-container'>
    <form action="savedata.php" method="POST">
      <div class="form-group">
         <label>Name</label>
         <input type="text" name="name"><br>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address"><br>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="class">
               <option>Select Class</option>
                <?php 
                   include "connection.php";
                   $sql="SELECT * FROM studentclass";
                   $result=mysqli_query($conn,$sql) or  die('query unsuccessful');
                   while($row=mysqli_fetch_assoc($result)){
                ?>
                 <option value="<?php echo $row['cid']?>"><?php echo $row['cname'] ?></option>

               <?php }?>
            
          </select><br>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone"><br>
      </div>
      <div class="submit">
          <input  class="btn" type="submit" name="submit" value="save">
      </div>

    </form>
    </div>

</div>
</div>