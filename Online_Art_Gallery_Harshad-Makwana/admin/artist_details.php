<?php include 'include/header.php'; ?>

 
 <!-- start main  -->
    
 <div class="nameofhead">
      <h1>ARTIST DETAILS</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/ARTIST DETAILS</p>
    </div>
    
    <!-- hadddd -->
    
    <div class="c-ord"><section>Artist Details</section></div>
   <div>
<?php

   $conn = mysqli_connect("localhost","root","","artgallery");

    //  $sql = "SELECT * FROM Student";
   $result = $conn->query("SELECT * FROM artist");
if($result->num_rows>0)
{

?>
     <table>
    <tr>
      <th>NAME</th>
      <th>Birth Date</th>
      <th>Nationality</th>
      <th>Biography</th>
    </tr>
    <?php  while($row = $result->fetch_assoc()){
  echo '<tr>';
     echo '<td>'.$row["ar_name"].'</td>';
     echo '<td>'.$row["birth_date"].'</td>';
     echo '<td>'.$row["nationality"].'</td>';
     echo '<td>'.$row["biography"].'</td>';
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
