<script>
	function DeleteNotice(id)
	{
		if(confirm("You Want To Delete This Record ?"))
		{
		window.location.href="delete_latest_news.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from latest_news ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Any Latest News !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">Latest News</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="9"><a href="index.php?page=add_latest_news">Add Latest News</a></th>
	</tr>
	<Tr class="success">
		<th>ID</th>
		<th>News</th>
		<th>Delete</th>
		<th>Update</th>
		
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['news']."</td>";



?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>

<?php 
echo "<Td><a href='index.php?page=update_news_update&id=".$row['id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>

		
</table>
<?php }?>