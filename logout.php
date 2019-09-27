<?php
//Kriji i kodit per shkaterrimin e variablave
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="You are logged out now";
header("location: login.php");
?>