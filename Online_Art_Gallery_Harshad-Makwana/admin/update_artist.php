<?php include 'include/header.php'; 
$conn = mysqli_connect("localhost","root","","artgallery");


if(isset($_POST["sub"]))
{
    $id=$_POST["id"];
    $name = $_POST["name"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];
    $biography = $_POST["biography"];

     $sql = "UPDATE artist SET ar_name = '$name' , nationality = ' $country ', biography= ' $biography' WHERE artist_id = '$id' ";

     if ($conn->query($sql) == TRUE) 
         
     {
      header("location:artist_details.php");
     }
    else 
    
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}        


?>



  <!-- start main  -->
  <div class="nameofhead">
      <h1>UPDATE ARTIST</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/<a href="artist_details.php">ARTIST</a>/UPDATE ARTIST</p>
    </div>



    <div class="container">
  <h2>update Artist</h2>
<?php
if(isset($_POST["view"]))
{
   $id=$_POST['id'];
    $sql = "SELECT * FROM artist WHERE `artist`.`artist_id` = {$_POST['id']}";
   $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
?>
 <form action="#" method="post">

    <div class="form-group">
    <input type="hidden" name="id" value="<?php if(isset($row['artist_id'])) { echo $row['artist_id'];} else { echo $row;} ?>">
   
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" required value="<?php if(isset($row['ar_name'])) { echo $row['ar_name'];} else { echo $row;} ?>">
   
    </div>
    <div class="form-group">
      <label for="birthdate">Birthdate:</label>
      <input type="text" id="birthdate" name="birthdate" required  readonly value="<?php if(isset($row['birth_date'])) { echo $row['birth_date'];} else { echo $row;} ?>">
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <select id="country" type="text" name="country" required >
        <option value="ind">India</option>
        <option value="canada">Canada</option>
        <option value="uk">United States</option>
        <!-- Add more options as needed -->
      </select>
    </div>
    <div class="form-group">
      <label for="biography">Biography:</label>
      <textarea id="biography" type="text" name="biography" rows="4" required disable><?php if(isset($row['biography'])) { echo $row['biography'];} else { echo $row;} ?></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
    
    
    <?php  
     }  
          ?>


 
 
 <!-- finish main -->
    
    
    
    
    
    
 </div> 
  <!-----end------ hero-----dive fior body-->

</body>
</html>