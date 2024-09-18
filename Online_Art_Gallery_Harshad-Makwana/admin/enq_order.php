<?php include 'include/header.php'; ?>

 
 <!-- start main  -->
    
 <div class="nameofhead">
      <h1>ORDER DETAILS</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/ORDER DETAILS</p>
    </div>
    
    <!-- hadddd -->
    
    <div class="c-ord"><section>Order Details</section></div>
   <div>
<?php

   $conn = mysqli_connect("localhost","root","","artgallery");

    //  $sql = "SELECT * FROM Student";
   $result = $conn->query("SELECT * FROM payment");
if($result->num_rows>0)
{

?>
     <table>
    <tr>
      <th>Payment Id</th>
      <th>Transection Id</th>
      <th>Customer Email</th>
      <th>Art Id</th>
      <th>price</th>
      <th>status</th>
      <th>Date</th>

    </tr>
    <?php  while($row = $result->fetch_assoc()){
  echo '<tr>';
     echo '<td>'.$row["pyament_id"].'</td>';
     echo '<td>'.$row["trn_id"].'</td>';
     echo '<td>'.$row["customer_email"].'</td>';
     echo '<td>'.$row["art_id"].'</td>';
     echo '<td>'.$row["price"].'</td>';
     echo '<td>'.$row["status"].'</td>';
     echo '<td>'.$row["date"].'</td>';

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
