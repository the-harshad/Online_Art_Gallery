<?php 
   include "includes/connection.php";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> artist </title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
    <style>
        /* Define styles for the container */
        .containerr {
            /* margin-top:20px; */
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
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
    </style>
</head>
<body>

  <?php include("includes/header.php") ?>
  <!-- header over -->
   
      <div class="second-navbar">
          <p><a href="home.php">home/</a> artist </p>
      </div>

<div class="artist-more">
     <div class="title-artist">
        <h1>Artist</h1>
     </div>
    <div class="cart-dack" align="center">
      <?php 
        $sql="select * from artist";
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
     <!-- <div class="view-more">
     <a href="artist.php" class="ccbtn">view more</a>
     </div> -->
  </div>

   <!-- footer -->
   <?php include("includes/footer.php") ?>

</body>
</html>