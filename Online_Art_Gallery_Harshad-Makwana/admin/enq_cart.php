<?php include 'include/header.php'; ?>

 
 <!-- start main  -->
    
 <div class="nameofhead">
      <h1>CART DETAILS</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/CART DETAILS</p>
    </div>
    
    <!-- hadddd -->
    
    <div class="c-ord"><section>Cart Details</section></div>
   <div>
<?php

   $conn = mysqli_connect("localhost","root","","artgallery");

    //  $sql = "SELECT * FROM Student";
   $result = $conn->query("SELECT * FROM c_order");
if($result->num_rows>0)
{

?>
     <table>
    <tr>
      <th>Order Id</th>
      <th>User Id</th>
      <th>Art Id</th>
      <th>Total Amount</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Pincode</th>
      <th>Address</th>

    </tr>
    <?php  while($row = $result->fetch_assoc()){
  echo '<tr>';
     echo '<td>'.$row["ord_id"].'</td>';
     echo '<td>'.$row["customer_mail"].'</td>';
     echo '<td>'.$row["art_id"].'</td>';
     echo '<td>'.$row["total_amount"].'</td>';
     echo '<td>'.$row["customer_name"].'</td>';
     echo '<td>'.$row["customer_email"].'</td>';
     echo '<td>'.$row["mob"].'</td>';
     echo '<td>'.$row["pin_no"].'</td>';
     echo '<td>'.$row["c_add"].'</td>';
          }
    ?>
</table>
     <?php  } 
?>
   </div>


    <!-- finish main -->
    
  </div> 
  <!-----end------ hero-----dive fior body-->

</body>
</html>
