<?php
include 'includes/connection.php';

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/hd.css">

    <title>Payment Confirmation</title>
</head>
<body>
    <header>
<?php

 
if(isset($_POST["conform"]))
{
        echo "<h1>Payment Confirmation</h1><br>
    </header>
    <main>
        <p>Your payment has been processed successfully.</p><br>
        <p>Transaction ID : <span id='transaction-id'>ORDS" . $_SESSION['rand'] . "</span></p><br>
        <p>Amount Paid : ₹ " .$_SESSION['price']. "</p><br>
        <p>Date : ". date('d-m-Y h:i:s A') . "</p><br>
        <h4>Status : <span id='payment-status'>Success</span></h4><br>
        <a href='profile.php' class='ccbtn'>profile</a>
        </main>";
   
    $trnid=$_SESSION['rand'];
    $semail=$_SESSION['userdata'];
    $artid=$_SESSION['art_id'];
    $date= date('d-m-Y');
    $price=$_SESSION['price'];
    
   $sql="INSERT INTO Payment VALUES (NULL, '$trnid', '$semail', '$artid', '$price','Success','$date');";
    $result = mysqli_query($conn, $sql);
    
} 
else
{
    echo "<h1>Payment Confirmation</h1><br>
    </header>
    <main>
        <p>Your payment has been processed unsuccessfully.</p><br>
        <p>Transaction ID : <span id='transaction-id'>ORDS" . $_SESSION['rand'] . "</span></p><br>
        <p>Amount Paid : ₹ " .$_SESSION['price']. "</p><br>
        <p>Date : ". date('d,m,Y h:i:s A') . "</p><br>
        <h4>Status : <span id='payment-status'>Faild</span></h4><br><br>
        <a href='profile.php' class='ccbtn'>profile</a>
    </main>";
    
    $trnid=$_SESSION['rand'];
    $semail=$_SESSION['userdata'];
    $artid=$_SESSION['art_id'];
    $date= date('d-m-Y');
    $price=$_SESSION['price'];
    
   $sql="INSERT INTO Payment VALUES (NULL, '$trnid', '$semail', 'Failed', '$artid', '$price', '$date');";
    $result = mysqli_query($conn, $sql);
   
}
?>
</body>
</html>
