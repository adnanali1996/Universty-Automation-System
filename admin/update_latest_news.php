<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update latest_news set news='$sub' where id='".$_GET['id']."'");
$err="<font color='blue'>Notice Updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from latest_news where id='".$_GET['id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Latest News</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter News</div>
		<div class="col-sm-5">
		<textarea name="sub" class="form-control"> <?php echo $res['news']; ?></textarea>
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
		<input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	