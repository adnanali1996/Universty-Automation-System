<?php 
extract($_POST);
if(isset($add))
{
     $teacher_name=$_SESSION['Teacher_name'];
    $sender="Teacher";
	if($details=="" || $sub=="")
	{
	$err="<font color='red'>Please Fill All The Fileds First</font>";	

	}
	else
	{    
		//mysqli_query($conn,"SELECT * FROM user WHERE email='$user'");
		
		$sql = "SELECT * FROM user WHERE email='$user'";
        $result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       $sem= $row['semester'];
		        $dep=$row['dep_id'];
		        mysqli_query($conn,"insert into notice values('','$user','$sub','$details',now(),'$sender','$teacher_name','$dep','$sem')");
		    }
		} else {
		    echo "0 results";
		}
		

		
		$err="<font color='green'>Notice Added Successfully</font>";	
	}
}

?>
<h2>Add New Notice</h2>
<table class="table table-bordered">
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
		<div class="row">
		<tr><td><div class="col-sm-4">Search User</div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="cms" class="form-control" />
		<input type="submit" name="Search" value="Search By CMS ID" class="form-control btn btn-success"/></td>
		
		</tr>
	</div>
	<?php 
	if(isset($Search)){
		if ($cms=="") {
			# code...
			$err="<font color='red'>Fill The Field First</font>";
		} else {
			# code...
		
		
	echo'<div class="row">
		<tr><td><div class="col-sm-4">User Email</div></td>
		<div class="col-sm-5">
		<td>';
	
	
	$sql=mysqli_query($conn,"select name,email from user WHERE cms_id='$cms'");
	while($r=mysqli_fetch_array($sql))
	{
		//echo "<option value='".$r['email']."'>".$r['name']."</option>";
		echo "<input type='text' value='".$r['email']."' name='user' class='form-control' readonly=''>";
		
	}
                  
			
			echo'</td></tr>
		</div>
	</div>';
	echo'<div class="row">
		<tr><td><div class="col-sm-4">Enter Subject</div></td>
		<div class="col-sm-5">
		<td><input type="text" name="sub" class="form-control"/></div></td></tr>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<tr><td><div class="col-sm-4">Enter Details</div></td>
		<div class="col-sm-5">
		<td><textarea name="details" class="form-control"></textarea></div></td></tr>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<tr><td colspan="2" align="center"><input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/></td>
		</tr>
		</div>
	</div>';
}
	 }
	?>
	
	
	
	
	
	
</form>	
</table>