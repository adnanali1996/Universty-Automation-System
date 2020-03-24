<?php 
include('connection.php');
extract($_POST);
if(isset($add))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from teacher where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This User Already Exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;


//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into teacher values('','$n','$e','$pass','$mob','$gen','$dob','$imageName')";
//mysqli_query($conn,$query);
if ($conn->query($query) === TRUE) {
   
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration Successfull !!</font>";

}
}


?>
<h2>Add New Teacher</h2>
<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Teacher's Name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Teacher's Email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Teacher's Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
					<td>Enter Teacher's Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Teacher's Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
			
				
				
				<tr>
					<td>Upload  Teacher's Image </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					<td>Enter Teacher's DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="add"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>