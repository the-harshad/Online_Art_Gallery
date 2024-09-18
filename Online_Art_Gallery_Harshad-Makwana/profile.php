<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
     <link rel="stylesheet" href="icons/css/all.css">
     <link rel="stylesheet" href="admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
</head>
<body>
 <?php include("includes/header.php"); ?>
   <!-- header -->
   <div class="second-navbar">
    <p><a href="home.php">home/</a> Profile </p>
   </div>
   
   <div>      
  <div class="login-container">
    <h2>Profile</h2>
    <form class="login-form" action="upd_pass.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="username">Email</label>
        <input type="email" id="username" name="username" value=" <?php echo $_SESSION["userdata"]; ?>">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value=" <?php echo $_SESSION["userdata"]; ?>">
      </div>
    </form>
  </div>
</div>

<?php

include("includes/connection.php");

$slogmail=$_SESSION['userdata'];
           
 $sql = "SELECT py.pyament_id, c.art_id, c.title, c.creation_date, c.artist, c.medium, c.price, c.img_url FROM payment AS py JOIN art AS c ON c.art_id = py.art_id WHERE py.customer_email = '$slogmail' ";
      $result = $conn->query($sql);
if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {  
             $_SESSION["art_id"] = $row['art_id'];
            $_SESSION["price"] = $row['price'];
            ?>
            <div class="cart-dack" align="center">

            <div class="card">
        <img src="<?php echo str_replace('../','./',$row["img_url"]); ?>" alt="Image 1"><br><br>
        <hr><h3><p><?php echo $row["title"]; ?></p></h3><hr>
        <p><?php echo $row["artist"]; ?></p>
        <p><b>Rs.</b><?php echo $row["price"]; ?></p>
        <p><b>Create </b><?php echo $row["creation_date"]; ?></p><br>
    </div>
 

<?php
            
        }
    }


?>

  
 
<!-- footer -->
<?php include("includes/footer.php"); ?>
  
</body>
</html>