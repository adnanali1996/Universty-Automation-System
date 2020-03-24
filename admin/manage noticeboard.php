<script>
	function DeleteNotice(id)
	{
		if(confirm("You Want To Delete This Record ?"))
		{
		window.location.href="delete_department.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice_board ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Notice Found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Notices</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add online notice board">Add New Notice</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Notice Name</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_department&id=".$row['id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>