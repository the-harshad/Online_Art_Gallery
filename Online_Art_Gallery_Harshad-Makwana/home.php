<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['userdata']))
    {
        header("Location: login.php");
    }
   include "includes/connection.php";
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
</head>
<!-- <body style="background-image: url('image/body1.jpg');"> -->
   

<body style="background-image: url('image/body2.jpg');
             background-repeat: no-repeat; 
             background-attachment: fixed; 
             background-size: 100% 100%; ">

    <?php include("includes/header.php") ?>
   <!-- header finish -->

      <div class="second-navbar">
         <h1>Home</h1>
      </div>

      <?php
      include("imgslider.php");
      ?>
      
    <div class="head-artist">
       <h1>World Famous Art Gallary</h1>
    </div>  

  <div class="artist-more">
     <div class="title-artist">
        <h1>Artist</h1>
     </div>
    <div class="cart-dack" align="center">
      <?php 
        $sql="select * from artist LIMIT 9 ";
        $result=$conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
              $artist_id=$row['artist_id'];
              echo '<div class="card">
              <h3><p>'.$row["ar_name"].'</p></h3><hr>
              <p>'.$row["birth_date"].'</p>
              <p>'.$row["nationality"].'</p><br>
              <a href="enq_artist.php?artist_id='.$artist_id.'" class="cbtn">Details</a>
              </div>';

            }
        }
       ?>
    </div>
     <div class="view-more">
     <a href="artist.php" class="ccbtn">view more</a>
     </div>
  </div>

  <div class="space">
  </div>

  <div class="art-pro">
  <div class="title-art-product">
        <h1>Art product</h1>
     </div>
  <div class="cart-dack" align="center">
      <?php 
        $sql="select * from art LIMIT 20 ";
        $result=$conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
              $art_id=$row['art_id'];
              echo '<div class="card">
              <img src="'.str_replace('../','./',$row["img_url"]).'" alt="Image 1"><br><br>
              <hr><h3><p>'.$row["title"].'</p></h3><hr>
              <p>'.$row["artist"].'</p>
              <p><b>Rs. </b>'.$row["price"].'</p>
              <p><b>Create </b>'.$row["creation_date"].'</p><br>
              <a href="enq_art.php?art_id='.$art_id.'" class="cbtn">BUY</a>
              </div>';

            }
        }
       ?>
    </div>
    <div class="view-more">
     <a href="product.php" class="ccbtn">view more</a>
     </div>
 </div>

 <div class="space">
  </div>

    <!-- footer -->
    <?php include("includes/footer.php") ?>
</body>
</html>