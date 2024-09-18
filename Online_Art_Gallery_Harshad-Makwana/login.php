<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css"> 
  <link rel="stylesheet" href="icons/css/all.css">


</head>
<body>
   <div class="login-container">
  <div class="closebtn">
    <a href="index.php"><i class="fa-solid fa-square-xmark fa-2xl" style="color:#007bff;"></i></a>
  </div>   
   <h2>Login</h2>
      <form class="login-form" action="#" method="post" autocomplete="off">
        <div class="form-group">
          <label for="username">Email</label>
          <input type="email" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login" class="login-btn">Login</button>                          
        <p>if you dont have account ? <a href="register.php">click here</a></p>
      </form>
    </div>
  </body>
</html>

<?php 

  session_start();
  $conn = mysqli_connect("localhost","root","","artgallery");

  if(isset($_POST["login"]))
  {
  
    $sname = $_POST["username"];
    $spass = $_POST["password"];

    $sql = "SELECT * FROM admin where admin_email = '$sname' AND admin_pass = '$spass' "; 
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0)
        {
  
          // admin
        
          $_SESSION["admindata"] = $sname; 
          header("location:admin/index.php");
        }

      else{
         $sql = "SELECT * FROM customer where customer_email = '$sname' AND customer_pass = '$spass' "; 
         $result = $conn->query($sql);
          if($result->num_rows > 0)
          {
    
            // customer
             
            $_SESSION["userdata"] = $sname;
            header("location:home.php");
          }

        else{
              header("location:index.php");
            }
   }
}
?>