<?php 

include 'header.php';
include "connection.php";

?>

    <div class="content">
        <h2 class="all-records">All Records</h2>

        <?php

         $sql="SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid ORDER BY sid ASC";
         $result=mysqli_query($conn,$sql) or  die('query unsuccessful');
         if(mysqli_num_rows($result)>0){

        ?>
        <table class="index-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>CLASS</th>
                    <th>PHONE</th>
                    <th>ACTION</th>
                </tr>

            </thead>
            <tbody>
                <?php 

                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <tr>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['sname'] ?></td>
                    <td><?php echo $row['saddress'] ?></td>
                    <td><?php echo $row['cname'] ?></td>
                    <td><?php echo $row['sphone'] ?></td>
                    <td><a class='btn1' href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a><a class='btn2' href='deletedata.php?id=<?php echo $row['sid']; ?>'>Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } 
        else{
            echo "<h3>No records found</h3>";
        }
        mysqli_close($conn);
        ?>
    </div>


    </div>
</body>
</html>