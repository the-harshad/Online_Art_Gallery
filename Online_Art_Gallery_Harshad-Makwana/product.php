<?php
 include("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
</head>
<body style="background-image: url('image/body2.jpg');
             background-repeat: no-repeat; 
             background-attachment: fixed; 
             background-size: 100% 100%; ">

    <?php include("includes/header.php") ?>
   <!-- header finish -->

      <div class="second-navbar">
         <p><a href="home.php">HOME/ </a>PRODUCT</p>
      </div>

      <?php
      include("imgslider.php");
      ?>
      
    <div class="head-artist">
       <h1>World Famous Art Gallary</h1>
    </div>  

  <div class="art-pro">
  <div class="title-art-product">
        <h1>All Art product</h1>
     </div>
  <div class="cart-dack" align="center">
      <?php 
        $sql="select * from art";
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
    <!-- <div class="view-more">
     <a href="product.php" class="ccbtn">view more</a>
     </div> -->
 </div>

 <div class="space">
  </div>

    <!-- footer -->
    <?php include("includes/footer.php") ?>
</body>
</html>