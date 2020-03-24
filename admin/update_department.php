<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update department set dep_name='$dep' where dep_id='".$_GET['dep_id']."'");
$err="<font color='blue'>Department Updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from department where dep_id='".$_GET['dep_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Deparments</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Update Department</div>
		<div class="col-sm-5">
		<textarea name="dep" class="form-control"> <?php echo $res['dep_name']; ?></textarea>
		</div>
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
		<input type="submit" value="Update Department" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	