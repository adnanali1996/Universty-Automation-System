<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>Fill All The Fileds First</font>";	
	}
	else
	{
      $pass=md5($p);	
      $sql = "SELECT * FROM user where email='$e' and pass='$pass'";
      $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
               
                echo $row['email'];
                $name=$row['name'];
                $_SESSION['cms_id']=$row['cms_id'];
                $_SESSION['user']=$e;
                 
               header('location:user');
            }
        
        } else {
    $err="<font color='red'>Wrong Email or Password !</font>";
        }   



//header('location:user');

}
}

?>
<h2>Student Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<br>
	
	<div class="row">
		<div class="col-sm-4">Enter YOur Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Enter YOur Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		
		</div>
	</div>
</form>	