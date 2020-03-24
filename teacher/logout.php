<?php 
session_start();
unset($_SESSION['Teacher']);
//session_destroy();
header('location:../index.php');
?>