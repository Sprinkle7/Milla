<?php
session_start();
$_SESSION['Username'] = NULL; 
$_SESSION['Email']    = NULL; 
$_SESSION['Picture']  = NULL; 
$_SESSION['ID']       = NULL; 
$_SESSION['logged']   = false;
session_destroy();
header("location:../index.php")
?>