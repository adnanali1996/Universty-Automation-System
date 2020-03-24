<?php 
extract($_POST);
if(isset($add))
{

	if($l_news=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{
		
mysqli_query($conn,"insert into latest_news values('','$l_news')");
				
		$err="<font color='green'>Notice Added Successfully</font>";	
	}
}

?>
<h2>Add New Latest News</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Latest News</div>
		<div class="col-sm-5">
		<input type="text" name="l_news" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	
	

		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Latest News" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	