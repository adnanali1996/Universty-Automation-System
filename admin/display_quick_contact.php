<script>
	function DeleteNotice(id)
	{
		if(confirm("You Want To Delete This Record ?"))
		{
		window.location.href="delete_msg.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from contact ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Notice Found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Quick Messages</h2>

<table class="table table-bordered">
	
	<Tr class="success">
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Reply To Message</th>
		<th>Delete</th>

		
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['contact_id']."</td>";
echo "<td>".$row['contact_name']."</td>";
echo "<td>".$row['contact_email']."</td>";
$em=$row['contact_email'];
echo "<td>".$row['contact_mobile']."</td>";
echo "<td>".$row['contact_msg']."</td>";
echo "<td><a href='index.php?page=Reply&email=$em'>Reply</a></td>";


?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['contact_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 

}
		?>
		
</table>
<?php }?>