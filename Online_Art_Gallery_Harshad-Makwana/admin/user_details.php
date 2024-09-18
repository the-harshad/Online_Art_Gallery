
<?php include 'include/header.php'; ?>

 
 <!-- start main  -->
    
 <div class="nameofhead">
      <h1>USER DETAILS</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>Home</a>/User Details</p>
    </div>
    
    <!-- aad -->
<div class="c-ord"><section>List of User</section></div>
   <div>
<?php

   $conn = mysqli_connect("localhost","root","","artgallery");

    //  $sql = "SELECT * FROM Student";
   $result = $conn->query("SELECT * FROM customer");
if($result->num_rows>0)
{

?>
     <table>
    <tr>
    <!-- <th>ID</th> -->
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Action</th>  
    </tr>
    <?php  while($row = $result->fetch_assoc()){
  echo '<tr>';
   //   echo '<td>'.$row["customer_id"].'</td>';
     echo '<td>'.$row["customer_name"].'</td>';
     echo '<td>'.$row["customer_email"].'</td>';
     echo '<td>'.$row["customer_pass"].'</td>';
     echo '<td>';
     echo '<form action="" method="post" style="display: inline;"><input type="hidden" name="id" value='.$row['customer_id'].'><button type="submit" name="delete" value="delete"><i class="fa-solid fa-trash fa-lg" style="color:#ff0000;"></i></button></form>';
     echo '</tr>';
     
          }
    ?>
</table>
     <?php  } 

if(isset($_POST['delete']))
{
    $num = $_POST["id"];
    $sql = "DELETE FROM `customer` WHERE `customer`.`customer_id` = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);
    
}

?>
   </div>
  <!-- <div>
    <a href="add_user.php"><i class="fa-solid fa-plus fa-beat-fade fa-2xl" style="color:#0000ff;"></i></a>
</div> -->
    
    <!-- finish main -->
    
  </div> 
  <!-----end------ hero-----dive fior body-->

</body>
</html>
