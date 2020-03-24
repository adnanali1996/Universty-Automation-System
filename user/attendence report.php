<?php 
if (!isset($_SESSION['user'])) {
  # code...
  header("Location: ../index.php?option=login");
  exit();
}
$cms_id=$_SESSION['cms_id'];
$q=mysqli_query($conn,"select * from attendence_report where cms_id='$cms_id'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
echo '<h3><a href="index.php?page=add_notice">Add New notice</a></h3>';
}
else
{
?>
<h2>Attendence Report</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>CMS ID</th>
		<th>Name</th>
		<th>Subject</th>
    <th>Teacher's Name</th>
		<th>Total Number of Classes</th>
		<th>Present</th>
    <th>Absent</th>
    <th>Persentage</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['cms_id']."</td>";
echo "<td>".$row['s_name']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['teacher_name']."</td>";
echo "<td>".$row['total_classes']."</td>";
echo "<td>".$row['present']."</td>";
echo "<td>".$row['absent']."</td>";
echo "<td>".$row['persentage']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>