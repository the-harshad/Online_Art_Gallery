<?php
 if(!isset($_SESSION))
 {
 session_start();
 }
 if(!isset($_SESSION['admindata']))
 {
  header("location: ../login.php");
  exit;
 }
?> 


<!DOCTYPE html>
<html>
<head>
  <title>deshboard</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icons/css/all.css">


</head>

<body>
  <div class="sidebar">
    <h2 class="fd_ap">Admin Panel</h2>

    <div class="dropdown">
    <a><i class="fa-solid fa-user"></i> Profile</a>
      <div class="dropdown-content">
        <a class="subfield" href="profile.php">My Account</a>
        <a class="subfield" href="logout.php"><i class="fa fa-sign-out"></i> logout</a>
      </div>
    </div>
    <a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a>
    
    <div class="dropdown">
    <a>User</a>
      <div class="dropdown-content">
        <a class="subfield" href="user_details.php"> User Details</a>
      </div>
    </div> 

    <div class="dropdown">
    <a>Artist</a>
      <div class="dropdown-content">
      <a class="subfield" href="artist_details.php">Artist Details</a>
      <a class="subfield" href="add_artist.php">Add Artist Details</a>
        <a class="subfield" href="manage_artist.php">Manage Artist</a>
      </div>
    </div>
    
    <div class="dropdown">
    <a>Art</a>
      <div class="dropdown-content">
        <a class="subfield" href="add_art.php"> Add Art</a>
        <a class="subfield" href="manage_art.php"> Manage Art</a>
      </div>
    </div> 
    
      <a href="enq_cart.php"><i class="fa-solid fa-table-cells"></i> Cart</a>
      <a href="enq_order.php"><i class="fa-solid fa-star-of-david"></i> Order</a>
      <a href="logout.php"><i class="fa fa-sign-out"></i> logout</a>  

  </div>
   </div>
   <div class="navbar">
    <h1>HR Art Gallery</h1>   
  </div>
  <!-- finish navbar -->
  
  <!-- start hero-div body -->
  <div class="content">