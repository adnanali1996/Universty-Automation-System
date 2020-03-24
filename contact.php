<?php
extract($_POST);
if(isset($save))
{
	if($e=="" || $p==""|| $msg=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{  

mysqli_query($conn,"insert into contact values('','$e','$n','$p','$msg')");


		
		
		$err="<font color='green'>Message Sended Successfully</font>";	
	}
}


?>

<h2>Quick Contact</h2>
<form method="post">
	<div class="row">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-6"><?php echo @$err;?></div>
	</div>
	
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Name</div>
		<div class="col-sm-5">
		<input type="text" name="n" class="form-control"/></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Mobile</div>
		<div class="col-sm-5">
		<input type="text" name="p" class="form-control"/></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Message</div>
		<div class="col-sm-5">
		
		<textarea name="msg" class="form-control"></textarea></div>
	</div>
	<br>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Send Query" name="save" class="btn btn-success"/>
		
		</div>
	</div>
		
		</div>
		<div class="col-md-4" style=" margin-top: -60;margin-left: -50;">
		<h2>Contact Us</h2>
		
		Name: Adnan Ali<br/><br/>
		Mobile: 0305-8293314<br/><br/>
		Email:adnan.qta2013@gmail.com<br/><br/>
		</div>
	</div>
	
	
</form>	