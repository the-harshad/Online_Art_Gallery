<?php

if(!isset($_SESSION))
{
    session_start();
}
unset($_SESSION["userdata"]);
session_destroy();

header("location: login.php");

?>
