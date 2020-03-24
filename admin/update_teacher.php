<?php 
extract($_POST);
if(isset($update))
{
	$dob=$yy."-".$mm."-".$dd;
mysqli_query($conn,"update teacher set name='$name',email='$email',mobile='$mobile',dob='$dob' where id='".$_GET['teacher_id']."'");
$err="<font color='blue'>Teacher Updated </font>";

}
if(isset($reset)){
	$name=" ";
	$email=" ";
	$mobile=" ";
	$dob=" ";
}
//select old teacher 

$q=mysqli_query($conn,"select * from teacher where id='".$_GET['teacher_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Teacher</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Name</div>
		<div class="col-sm-5">
		<input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control"/></div>
	</div>
	
	
	<br>
	<div class="row">
		<div class="col-sm-4">Enter Email Adress</div>
		<div class="col-sm-5">
		<input type="text" name="email" value="<?php echo $res['email']; ?>" class="form-control"/></div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">Enter Mobile Number</div>
		<div class="col-sm-5">
		<input type="text" name="mobile" value="<?php echo $res['mobile']; ?>" class="form-control"/></div>
	</div><br>
	<div class="row">
		<div class="col-sm-4">Pick Your Date of Birth</div>
		<div class="col-sm-5">
		
		<?php 
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>
					<select class="form-control" style="width:100px;float:left" name="yy">
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2017;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					
					</select>
					
					<select class="form-control" style="width:100px;float:left" name="mm">
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
					
 					
					<select class="form-control" style="width:100px;float:left" name="dd">
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
	</div>
	
	<div class="row" style="margin-left:30px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
	</div>	
	
	
	<br><br>
	<div class="row" style="margin-left:30px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
	</div>	
		<br>
		<div class="row" style="margin-left:30px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Teacher" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	