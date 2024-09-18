<?php include 'include/header.php'; ?>

<?php

$conn = mysqli_connect("localhost","root","","artgallery");

if(isset($_POST["view"]))
{
  $id=$_POST["id"];
  $_SESSION["id"]=$id;
  echo $id ;
}

if(isset($_POST["sub"]))
{
    $aid=$_SESSION["id"];
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $medium = $_POST["medium"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $creationdate = $_POST["creationdate"];
    $img = $_FILES["imgq"]["name"];
    $tm = $_FILES["imgq"]["tmp_name"];
    $img_folder = '../image/artproduct/'.$img;
    
    if(move_uploaded_file($tm,"../image/artproduct/".$img))
    {
      $sql = "UPDATE `art` SET `title` = '$title', `artist` = '$artist', `art_desc` = '$description', `price` = '$price', `creation_date` = '$creationdate', `medium` = '$medium' , img_url = '$img_folder' WHERE `art`.`art_id` = '$aid' ";

     if ($conn->query($sql) == TRUE) 
         
     {
      header("location:manage_art.php");
     }
    else 
    
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
    
}
?>
    <!-- start main  -->
 <div class="nameofhead">
      <h1>UPDATE ART</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>
     /<a href="manage_art.php">ART</a>/UPDATE ART </p>
    </div>
        
   <div class="container">
  <h2>Update Art</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Title:</label>
      <input type="text" id="name" name="title" >
    </div>
    <div class="form-group">
      <label for="name">Artist:</label>
      <input type="text" name="artist" >
    </div>
    <div class="form-group">
      <label for="name">Medium:</label>
      <input type="text" name="medium" >
    </div>
    <div class="form-group">
    <label for="biography">Description:</label>
      <textarea id="biography" name="description" rows="4" ></textarea>
    </div>
    <div class="form-group">
      <label for="name">Price:</label>
      <input type="text" id="name" name="price" >
    </div>
    <div class="form-group">
      <label for="birthdate">Creation Date:</label>
      <input type="date" id="birthdate" name="creationdate" >
    </div>
    <div class="form-group">
      <label for="name">Image:</label>
      <input type="file" name="imgq" id="img" >
    </div>
    <div class="form-group">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>

    <!-- finish main -->
    
    
    
    
    
  </div> 
  <!-----end------ hero-----dive fior body-->

</body>
</html>


