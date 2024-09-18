<?php
 if(!isset($_SESSION))
 {
 session_start();
 }
 if(!isset($_SESSION['userdata']))
 {
  header("location: ../login.php");
  exit;
 }
?> 

<header>
    <div class="name-web">
        <h1>HR Art Gallary</h1>
    </div>

    <div class="navbar">
    
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
        <a class="category-link" onclick="toggleCategories()">Categories</a>
    <div class="category-list" id="categories">
        <a href="artist.php">Artist</a>
    </div>
    <a href="product.php">product</a>
    <a href="contect.php">Contact</a>
    <a href="logout.php"><i class="fa fa-sign-out"></i> logout</a>  
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
        <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
    </div>

    <div class="nav-singin">
        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>  
    </div>

    <div class="nav-cart">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
    </div>

</div>

</header>