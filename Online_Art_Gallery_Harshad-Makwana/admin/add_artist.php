<?php include 'include/header.php'; ?>

<?php

$conn = mysqli_connect("localhost","root","","artgallery");

if(isset($_POST["sub"]))
{
    $name = $_POST["name"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];
    $biography = $_POST["biography"];

     $sql = "INSERT INTO `artist`(`artist_id`, `ar_name`, `birth_date`, `nationality`, `biography`) VALUES ('NULL','$name',' $birthdate',' $country','$biography')";
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
      <h1>ADD ARTIST</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/<a href="artist_details.php">ARTIST</a>/ADD ARTIST</p>
    </div>

   <div class="container">
    <div class="border">
  <h2>Add Artist</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="birthdate">Birthdate:</label>
      <input type="date" id="birthdate" name="birthdate" required>
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <select id="country" name="country" required>
        <option value="usa">India</option>
        <option value="canada">Canada</option>
        <option value="uk">United States</option>
        <!-- Add more options as needed -->
      </select>
    </div>
    <div class="form-group">
      <label for="biography">Biography:</label>
      <textarea id="biography" name="biography" rows="4" required></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>
</div>
    <!-- finish main -->
    
    
    
    
    
    
  </div> 
  <!-----end------ hero-----dive fior body-->

</body>
</html>
