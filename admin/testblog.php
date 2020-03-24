<?php
include('../connection.php');
extract($_POST);
$q=mysqli_query($conn,"select * from notice_board ");
$rr=mysqli_num_rows($q);
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";

echo "<td>".$row['name']."</td>";
echo "<td>".$row['date']."</td>";
//echo "<td>".$row['notice']."</td>";
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['notice']).'" Height=100" width="100"/>';
}
if(isset($_POST['Submit']))
{
    echo $_FILES['f']['name'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipar/form-data" method='post'>
	<input type="file" name="f">
	<input type="Submit" name="submit">
</form>
</body>
</html>