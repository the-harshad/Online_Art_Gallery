<?php 
   include "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
     <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/hd.css">
    <style>
       
    </style>
</head>
<!-- <body>  -->
<body style="background-image: url('image/body1.jpg');
             background-repeat: no-repeat; 
             background-attachment: fixed; 
             background-size: 100% 100%; ">
 <header>
    <div class="name-web">
        <h1>HR Art Gallary</h1>
    </div>

    <div class="navbar">
    
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- <a href="contect.php">Contact</a> -->
      </div>

      <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>
    
      <script>
        function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         document.getElementById("main").style.marginLeft = "250px";
         }

        function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         document.getElementById("main").style.marginLeft= "0";
         }

        function toggleCategories() {
        const categories = document.getElementById("categories");
         categories.classList.toggle("active");
         }
       </script>
    
      <div class="nav-address border">
        <p>Deliver to</p>
        <p><i class="fa-solid fa-location-dot"></i> IND</p>
      </div>

      <div class="name1">
      </div>

      <div class="hr-titel">
         <h1>HR</h1>
        <div class="art-titel">
            <h1 class="cl2">Art Gallery</h1>
        </div>
      </div>

      <div class="nav-singin">
        <a href="login.php"><i class="fa-solid fa-user"></i> Login</a>
      </div>

      <div class="nav-singin">
        <a href="register.php"><i class="fa-solid fa-user-plus"></i> Register</a>
      </div>

     <div class="nav-cart">
        <a href="login.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
     </div>

    </div>

  </header>

<!-- finish header -->
    <?php
    include ("imgslider.php");
    ?>

<div class="head-artist">
       <h1>Welcome Our World Famous Art Gallary</h1>
    </div>  
    
    <!-- <div class="image">
       
    </div> -->

    <div class="second-navbar">
        <h1>ART</h1>
    </div>

    <div class="cart-dack" align="center">
    <?php 
      $sql="select * from art LIMIT 9 ";
      $result=$conn->query($sql);

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()){

    echo '<div class="card">
        <img src="'.str_replace('../','./',$row["img_url"]).'" alt="Image 1"><br><br>
        <hr><h3><p>'.$row["title"].'</p></h3><hr>
        <p>'.$row["artist"].'</p>
        <p><b>Rs.</b>'.$row["price"].'</p>
        <p><b>Create </b>'.$row["creation_date"].'</p><br>
        <a href="login.php" class="cbtn">buy</a>
    </div>';

            }
        }
        ?>
    
</div>

<div class="view-more">
<a href="login.php" class="ccbtn">view more</a>
</div>

  <!-- start footer -->
<?php include 'includes/footer.php'; ?>
</body>
</html>