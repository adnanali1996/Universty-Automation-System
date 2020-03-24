<?php 
extract($_POST);
if(isset($add))
{
    $teacher_name=$_SESSION['Teacher_name'];
    $sender="Teacher";
	if($details=="" || $sub=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{   $v="All Class";

mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now(),'$sender','$teacher_name','$dep','$sem')");


		
		
		$err="<font color='green'>Notice Added Successfully</font>";	
	}
}

?>
<h2>Add New Notice</h2>
<form method="post">
					<table class="table table-bordered"><tr>
					<td>Pick Department </td>
					<td>				<select name="dep">
					<?php
					$sql = "SELECT * FROM department";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					    	$id=$row['dep_id'];
					    	$name=$row['dep_name'];
					    echo"    <option value='$id'>$name</option>";
					    }
					} else {
					    echo "0 results";
					}
					
				
				  ?>
				</select>	</td>
				</tr>
				<tr>
					
				</tr>
				<tr>
					<td>Pick Semester </td>
					<td>				<select name="sem">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>

				</select>	</td>
				</tr>
				
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<tr><td><div class="row">
		<div class="col-sm-4">Enter Subject</div></td>
		<td>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control" style="margin-left:-15px;" /></div>
	</div></td></tr>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
	<tr><td>	<div class="col-sm-4">Enter Details</div></td>
		<div class="col-sm-5">
		<td>
		<textarea name="details" class="form-control"></textarea></div></td></tr>
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
		<tr><Td colspan="2" align="center"><input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/></td>
		</tr>
		</div>
		</table>
	</div>
</form>	