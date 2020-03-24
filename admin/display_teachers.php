<script>
	function DeleteNotice(id)
	{
		if(confirm("You Want To Delete This Record ?"))
		{
		window.location.href="delete_teacher.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from teacher ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Notice Found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Teachers</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="9"><a href="index.php?page=add_teacher">Add New Teacher</a></th>
	</tr>
	<Tr class="success">
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['dob']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_teacher&teacher_id=".$row['id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>