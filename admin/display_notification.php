<script>
	function DeleteNotice(id)
	{
		if(confirm("You Want To Delete This Record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Notice Found !!!</h2>";
echo '<h3><a href="index.php?page=add_notice">Add New notice</a></h3>';
}
else
{
?>
<h2 style="color:#00FFCC">All Notice</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="11"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User</th>
		<th>Sender</th>
		<th>Sender's Name</th>
		<th>Date</th>
		<th>Department</th>
		<th>Semester</th>
		<th>Delete</th>
		<th>Update</th>

	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['user']."</td>";
//echo "<td>".$row['dep_id']."</td>";
	//while ($row['dep_id']) {
		# code...

	//}
echo "<td>".$row['sender']."</td>";
echo "<td>".$row['sender_name']."</td>";
echo "<td>".$row['Date']."</td>";

$id=$row['dep_id'];
		$qi=mysqli_query($conn,"select * from department Where dep_id='$id'");
		while($row1=mysqli_fetch_assoc($qi)){
			echo "<td>".$row1['dep_name']."</td>";
		
		}
echo "<td>".$row['semester']."</td>";
?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>