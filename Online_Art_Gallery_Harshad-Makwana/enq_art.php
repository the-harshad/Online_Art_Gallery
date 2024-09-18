<?php 
   include "includes/connection.php";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> art detail </title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/addcart.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
   
</head>
<body>

  <?php include("includes/header.php") ?>
  <!-- header over -->
   
      <div class="second-navbar">
          <p><a href="home.php">home/</a> Art Product Detail </p>
      </div>
      <div class="containerr">
      <?php 

        $artid = $_GET['art_id'];

        $sql="select * from art where art_id=$_GET[art_id]";
        $result=$conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $cusmail=$_SESSION['userdata'];
                
                $price=$row["price"];
              $art_id=$row['art_id'];
              echo '<div class="card">
              <img src="'.str_replace('../','./',$row["img_url"]).'" alt="Image 1"><br><br>
              <hr><h3><p>'.$row["title"].'</p></h3><hr>
              <p>'.$row["artist"].'</p>
              <p><b>Rs. </b>'.$row["price"].'</p>
              <p><b>Create </b>'.$row["creation_date"].'</p>
              <p>'.$row["art_desc"].'</p><br>
              
              </div>';

            }
        }
       ?>
      <br><hr><br>
      <form class="review-form" action="" method="post" autocomplete="off">
        <div class="form-group">
          <label for="username">NAME:</label>
          <input type="text" name="username" placeholder="Your Full Name" required>
        </div>
        <div class="form-group">
          <label for="email">E-MAIL:</label>
          <input type="email" name="email" placeholder="Your Email Id" required>
        </div> 
        <div class="form-group">
          <label for="username">PHONE-NO.:</label>
          <input type="text" name="phoneno" placeholder="Your Mobile No... " required>
        </div>
        <div class="form-group">
          <label for="username">PIN_NO.:</label>
          <input type="text" name="pinno" placeholder="your name" required>
        </div>
        <div class="form-group">
        <label for="username">ADDRESS:</label>
          <textarea id="query" name="address" rows="4" required></textarea>
        </div>
        <input type="submit" value="ADD CART" name="cart">
      </form>
    </div>
 <?php  
 
            if(isset($_POST['cart']))
            {
              $uname=$_POST['username'];
              $email=$_POST['email'];
              $phoneno=$_POST['phoneno'];
              $pinno=$_POST['pinno'];
              $address=$_POST['address'];
          
               $sql = "INSERT INTO `c_order` VALUES (NULL, '$cusmail', '$artid', '$price', '$uname', '$email', '$phoneno', '$pinno', '$address');";
               $result = $conn->query($sql);
                 header("location:cart.php");             
            }
           else{
                // echo'eroor';
               }
 
 ?>
   <!-- footer -->
   <?php include("includes/footer.php");
            
            ?>

</body>
</html>