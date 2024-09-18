<?php 
   include "includes/connection.php";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> artist Details </title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
    <style>
        /* Define styles for the container */
        .containerr {
            /* margin-top:20px; */
            max-width: 600px;
            margin: 0 auto;
            margin-top:30px;
            margin-bottom:30px;
            padding: 20px;
            padding-right: 40px; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the container image */
        .containerr img {
            max-width: 100%;
            height: 350px;
        }

        /* Style for the container title (h3) */
        .containerr h3 {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }

        /* Style for paragraphs (p) */
        .containerr p {
            text-align: center;
            margin: 10px 0;
        }

        /* Style for input fields */
        .containerr input {
            width: 96%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the button */
        .containerr input[type=submit] {
          width: 95%;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        
.review-form {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  font-size: 14px;
  color: #555;
  margin-bottom: 5px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
    </style>
</head>
<body>

  <?php include("includes/header.php") ?>
  <!-- header over -->
   
      <div class="second-navbar">
          <p><a href="home.php">home/</a> Artist Detail </p>
      </div>

      <div class="containerr">
        <?php 

      
       $artid = $_GET['artist_id'];

       $sql="select * from artist where artist_id=$_GET[artist_id]";

        $result=$conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
              $arname=$row['ar_name'];
              $artist_id=$row['artist_id'];
              echo '<div>
              <h3><p>'.$row["ar_name"].'</p></h3><hr>
              <p>'.$row["birth_date"].'</p>
              <p>'.$row["nationality"].'</p><hr>
              <h2><p>biography</p></h2>
              <p>'.$row["biography"].'</p><br>
              </div>';

            }
        }
       ?>
    </div>
 
    
  <div class="art-pro">
  <div class="title-art-product">
        <h1>Realated Art </h1>
     </div>
  <div class="cart-dack" align="center">
      <?php 
        $sql="select * from art where artist = '$arname'";
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
 </div>
   <!-- footer -->
   <?php include("includes/footer.php") ?>

</body>
</html>