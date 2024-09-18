<?php include 'include/header.php'; ?>

<?php

$conn = mysqli_connect("localhost","root","","artgallery");

if(isset($_POST["sub"]))
{
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
      
    //$sql = "INSERT INTO `art`(`art_id`, `title`, `artist`,'medium', `description`, `price`, `creation_date`, `img_url`) VALUES ('NULL','$title','$artist','$description','$price','$creationdate','$img_folder','$medium')";
    $sql = "INSERT INTO `art`(`art_id`, `title`, `artist`, `art_desc`, `price`, `creation_date`, `img_url`, `medium`) VALUES ('NULL','$title','$artist','$description','$price','$creationdate','$img_folder','$medium')";
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
      <h1>ADD ART</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>HOME</a>/ADD ART</p>
    </div>
    
   <div class="container">
  <h2>Add Art</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Title:</label>
      <input type="text" id="name" name="title" required>
    </div>
    <div class="form-group">
      <label for="name">Artist:</label>
      <input type="text" name="artist" required>
    </div>
    <div class="form-group">
      <label for="name">Medium:</label>
      <input type="text" name="medium" required>
    </div>
    <div class="form-group">
    <label for="biography">Description:</label>
      <textarea id="biography" name="description" rows="4" required></textarea>
    </div>
    <div class="form-group">
      <label for="name">Price:</label>
      <input type="text" id="name" name="price" required>
    </div>
    <div class="form-group">
      <label for="birthdate">Creation Date:</label>
      <input type="date" id="birthdate" name="creationdate" required>
    </div>
    <div class="form-group">
      <label for="name">Image:</label>
      <input type="file" name="imgq" id="img" required>
    </div>
    <div class="form-group">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>
    <!-- finish main -->
    
  </div> 
  <!-----end------ hero-----dive for body-->

</body>
</html>
