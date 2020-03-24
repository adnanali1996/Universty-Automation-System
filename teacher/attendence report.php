<?php 
extract($_POST);
if (!isset($_SESSION['Teacher_name'])) {
	# code...
	header('location:login.php');
	exit();
}
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
		
		        mysqli_query($conn,"insert into attendence_report values('','$user','$sub','$details',now(),'$sender','$teacher_name','$dep','$sem')");
		   
		

		
		$err="<font color='green'>Notice Added Successfully</font>";	
	}
}
if (isset($search)) {
	# code...
	$teacher_name=$_SESSION['Teacher_name'];
	if ($c=="") {
		# code...
		$err="<font color='red'>Please Enter CMS ID</font>";
	} 
	else{
		$q=mysqli_query($conn,"select * from attendence_report where cms_id='$c' AND subject='$sub'");
	$rr=mysqli_num_rows($q);
	if ($rr==0) {
		# code...
		$err="<font color='red'>Record Not Found</font>";
	
	}
	else{
		while($row=mysqli_fetch_assoc($q))
		{

	
	
		$cms1=$row['cms_id'];
		$s_name=$row['s_name'];
		$subject=$row['subject'];
		$Total_classes=$row['total_classes'];
		$Present=$row['present'];
		$Absent=$row['absent'];
		$Persentage=$row['persentage'];
		
		
		}
		
	}
	
		
	}
	
}

?>
<h2>Manage Student's Attendence Report</h2><br>
<table class="table table-bordered">
<form method="post" action="">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
		<div class="row">
		<tr><td><div class="col-sm-6"><b>Student's CMS ID</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="c" class="form-control" value="<?php if(isset($cms1)){echo $cms1;}?>" />
		</td>
		
		</tr>
	</div>
	<div class="row">
		<tr><td><div class="col-sm-4"><b>Subject</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="sub" class="form-control" value="<?php if(isset($subject)){echo $subject;}?>" />
		</td>
		
		</tr>
	</div>
	<div class="row">
		<tr><td><div class="col-sm-5"><b>Search</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="submit" value="Search Student By CMS" name="search" class="form-control btn-success" />
		</td>
		
		</tr>
	</div>
	<div class="row">
		<tr><td><div class="col-sm-6"><b>Student's Name</b></b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="name" class="form-control" value="<?php if(isset($s_name)){echo $s_name;}?>" readonly=""/>
		</td>
		
		</tr>
	</div>
	
	
	<div class="row">
		<tr><td><div class="col-sm-6"><b>Total Classes</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="total_classes" class="form-control" value="<?php if(isset($Total_classes)){echo $Total_classes;}?>" />
		</td>
		
		</tr>
	</div>
	<div class="row">
		<tr><td><div class="col-sm-6"><b>Present</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="present" class="form-control" value="<?php if(isset($Present)){echo $Present;}?>" />
		</td>
		
		</tr>
	</div>
	
	<div class="row">
		<tr><td><div class="col-sm-4"><b>Absent</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="absent" class="form-control" value="<?php if(isset($Absent)){echo $Absent;}?>"/>
		</td>
		
		</tr>
	</div>
	<div class="row">
		<tr><td><div class="col-sm-6"><b>Persentage (%)</b></div></td>
		<div class="col-sm-5">
		<td></div><input type="text" name="persentage" class="form-control" value="<?php if(isset($Persentage)){echo $Persentage;}?>" readonly=""/>
		</td>
		
		</tr>
	</div>
		<div class="row">
		<tr>
		<div class="col-sm-5" ><td></td>
		<td  ></div><input type="submit" value="Update Student's Persentage Report" name="add" class="btn btn-success" style="margin-right: 10px;" /><input type="reset" class="btn btn-success"/>
		</td>
		
		</tr>
	</div>

	
	
	
	
	
	
	
</form>	
</table>