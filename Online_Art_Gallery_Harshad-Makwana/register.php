<?php
$conn = mysqli_connect("localhost","root","","artgallery");

// Check connection
if(isset($_POST["rj"]))
{
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["password"];
  
    $sql = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`) VALUES (NULL, '$name', '$email', '$password')";
 
     if ($conn->query($sql) == TRUE) 
         
     {
      header("location:login.php");
     }
    else 
    
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}
?>
  
<!DOCTYPE html>
<html>
  <head>
   <title>Register Page</title>
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="icons/css/all.css">

  </head>

  <body>
   <div class="loginu-container">
   <div class="closebtn">
    <a href="index.php"><i class="fa-solid fa-square-xmark fa-2xl" style="color:#007bff;"></i></a>
  </div>  
      <h2>Ragister</h2>
      <form class="loginu-form" action="#" method="post" autocomplete="off">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="username" name="useremail" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="rj" class="loginu-btn">Register</button>
        <p>you already have account ? <a href="login.php">click here</a></p>
      </form>
    </div>
  </body>
</html>