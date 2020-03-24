<?php 
extract($_POST);
if(isset($send))
{
	if ($rep=="" OR $email=="" OR $sub=="") {
		# code...
		$err="Please Input All Fields";
	}
	else{
	$email=$_GET['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		# code...
		$err="Please Provide Valid Email";
	}
	else{
		$sender=$_SESSION['admin'];
		$header="From: ". $sender;
		$msg="Name: Adnan Ali"."\n"."Phone: 03058293314"."\n"."Wrote The Following"."\n".$rep;
		if (mail($email, $sub, $msg, $header)) {
			# code...
			$err="Email Sucessfully Sended";
		}
		else
			{$err="Your Email Can't Be Sended";
			}
		}
}
		
	
}

?>
<h2>Reply To Quick Contact</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	
		
	<div class="row">
		<div class="col-sm-4">Email Address of Sender</div>
		<div class="col-sm-5">
		<input type="text"  name="email" class="form-control" value="<?php
	echo $_GET['email'];?>" readonly=""></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Email Subject</div>
		<div class="col-sm-5">
		<input type="text"  name="sub" class="form-control"  ></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Reply Message</div>
		<div class="col-sm-5">
		<textarea name="rep" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	

	
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Send Message" name="send" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	