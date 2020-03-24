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
$q=mysqli_query($conn,"select * from department ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Notice Found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Quotes</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_department">Add New Quote of The Day</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Department Name</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['dep_name']."</td>";


?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['dep_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_department&dep_id=".$row['dep_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>