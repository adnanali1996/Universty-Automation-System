
<h2>Add New Notice Into Online Notice Board</h2>
<form method="post" enctype="multipart/form-data" action="">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Notice Name</div>
		<div class="col-sm-5">
		<input type="text"  name="name" class="form-control"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Chose Notice</div>
		<div class="col-sm-5">
		<input type="file" name="f" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-sm-4">Pick A Date</div>
		<div class="col-sm-5">
		<input type="date" name="notice_date" class="form-control"></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	

	
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
<?php 
extract($_POST);
if(isset($add))
{

	if($name==""||$f=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{	
		//$img=addslashes(file_get_contents($_FILES['notice_b']['tmp_name']));
		  if(isset($_POST))
    {

      if(array_key_exists('f',$_FILES))
    {   

     $file = $_FILES['f']['tmp_name'];

        if(!isset($file))
        echo "Please choose a file.";
        else {
            $uploadfile = addslashes(file_get_contents( $_FILES['f']['name']));
            $uploadfilename = addslashes($_FILES['f']['tmp_name']);  
        }

}

}
		 
mysqli_query($conn,"INSERT INTO notice_board (`id`, `name`, `notice`, `date`) VALUES (NULL, '$name', '$img', '$notice_date')");
		
		
		$err="<font color='green'>Notice Added Successfully</font>";	
	}
}

?>