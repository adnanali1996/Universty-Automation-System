<?php 
extract($_POST);
if(isset($add))
{

	if($dep==""||$id=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{
		
mysqli_query($conn,"insert into department values('$id','$dep')");
		
		
		$err="<font color='green'>Department Added Successfully</font>";	
	}
}

?>
<h2>Add New Department</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Department ID</div>
		<div class="col-sm-5">
		<input type="text"  name="id" class="form-control"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter Department</div>
		<div class="col-sm-5">
		<textarea name="dep" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	

	
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Department" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	