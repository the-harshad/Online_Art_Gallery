<?php include 'include/header.php'; 

if(!isset($_SESSION["admindata"]))
{
  header("location: ../login.php");
  exit;
}

?>

<?php
       $conn = mysqli_connect("localhost","root","","artgallery");
      
       $sql= "select * from artist";
       $result=$conn->query($sql);
       $totalartist=$result->num_rows;

       $sql= "select * from art";
       $result=$conn->query($sql);
       $totalart=$result->num_rows;

       $sql= "select * from customer";
       $result=$conn->query($sql);
       $totaluser=$result->num_rows;

       $sql= "select * from c_order";
       $result=$conn->query($sql);
       $totalcart=$result->num_rows;

       $sql= "select * from payment";
       $result=$conn->query($sql);
       $totalord=$result->num_rows;
?>

<!-- start main part  -->
    <div class="nameofhead">
      <h1 class="">DASHBOARD</h1>
    </div>
   
    <div class="inernav">     
     <p><a href="index.php"><i class="fa-solid fa-house"></i>Home</a>/Dashboard</p>
    <div>

    <div>
      <div class="card-container">
    <div class="card">
      <h2><?php echo $totalartist ; ?></h2>
      <p>TOTAL ARTIST</p>
    </div>

    <div class="card">
    <h2><?php echo $totalart; ?></h2>
    <p>TOTAL ART</p>
    </div>

    <div class="card">
    <h2><?php echo $totaluser; ?></h2>
      <p>TOTAL USER</p>
    </div>
  </div>
      <div class="card-container">
    <div class="card">
    <h2><?php echo $totalcart; ?></h2>
      <p>TOTAL CART PRODUCT</p>
    </div>

    <div class="card">
    <h2><?php echo $totalord; ?></h2>
     <p>TOTAL ORDER</p>
    </div>

    <div class="card">
    <h2><?php echo $totalord; ?></h2>
     <p>SELLING PRODUCT</p>
    </div>

  </div>
      
    </div>
    
    <!-- finish main part -->
    
  </div> 
  <!--end hero-div body-->

</body>
</html>
