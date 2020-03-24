<?php 
$email= $_SESSION['user'];
if (!isset($_SESSION['user'])) {
  # code...
  header("Location: ../index.php?option=login");
  exit();
}
$sql = "SELECT * FROM user Where email='$email'";
$result = $conn->query($sql);
$dep;
$sem;
if ($result->num_rows > 0) {
   
   while ( $row = $result->fetch_assoc()) {
    	# code...
   	//$row["semester"];
   
   //	echo $row['semester'];
          global $dep, $sem;
          $sem=$row['semester'];
          $dep=$row['dep_id'];
          echo $dep;
          echo $sem;
    } 
         
    }
 else {
    echo "0 results";
}
$q=mysqli_query($conn,"select * from notice where user='$email' or semester='$sem' AND dep_id='$dep'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
echo '<h3><a href="index.php?page=add_notice">Add New notice</a></h3>';
}
else
{
?>
<h2>All Notification</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Sender</th>
		<th>Sender Name</th>
		<th>Date</th>
    <th>Reply</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['sender']."</td>";
echo "<td>".$row['sender_name']."</td>";
echo "<td>".$row['Date']."</td>";
echo "<td><a href=''>Reply</a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>