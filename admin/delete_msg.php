<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from contact where contact_id='$nid'");

header('location:index.php?page=manage_quick_messages');

?>