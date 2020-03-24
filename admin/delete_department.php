<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from department where dep_id='$nid'");

header('location:index.php?page=manage_departments');

?>