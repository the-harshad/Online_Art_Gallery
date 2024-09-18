<?php

$conn = mysqli_connect("localhost","root","","artgallery");

if(isset($_POST["update"]))
{
  $pass = $_POST ["newpassword"];

  $sql = "UPDATE `admin` SET `admin_pass` = '$pass' WHERE `admin`.`admin_id` = 1;";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
    echo "password update";
    header("location:../login.php");

  }
  else
  {
    echo "error";
  }
}

?>

