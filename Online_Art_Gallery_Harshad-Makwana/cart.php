<?php 
   include "includes/connection.php";
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> contect </title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
</head>
<body>

  <?php include("includes/header.php") ?>
  <!-- header over -->
  
      <div class="second-navbar">
          <p><a href="home.php">home/</a> cart </p>
      </div>

      
<?php
$slogmail=$_SESSION['userdata'];
           
 $sql = "SELECT py.ord_id, c.art_id, c.title, c.creation_date, c.artist, c.medium, c.price, c.img_url FROM c_order AS py JOIN art AS c ON c.art_id = py.art_id WHERE py.customer_mail = '$slogmail' ";
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
        <a href="chack.php" class="cbtn">order</a>
    </div>
 

<?php
            
        }
    }


?>
</body>
</html>