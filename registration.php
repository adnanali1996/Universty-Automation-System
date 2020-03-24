<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e' or cms_id='$cms'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This User Already Exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$cms','$n','$e','$pass','$dep','$sem','$mob','$gen','$hob','$imageName','$dob',now())";
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
<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your Name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your Email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				<tr>
					<td>Enter Your CMS ID </td>
					<Td><input type="text"  class="form-control" name="cms" required/></td>
				</tr>
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Department </td>
					<td>				<select name="dep">
					<?php
					$sql = "SELECT * FROM department";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					    	$id=$row['dep_id'];
					    	$name=$row['dep_name'];
					    echo"    <option value='$id'>$name</option>";
					    }
					} else {
					    echo "0 results";
					}
					
				
				  ?>
				</select>	</td>
				</tr>
				<tr>
					<td>Enter Your Semester </td>
					<td>				<select name="sem">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>

				</select>	</td>
				</tr>
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male <input type="radio" name="gen" value="m" required/>
				Female <input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your hobbies</td>
					<Td>
					Reading <input value="reading" type="checkbox" name="hob[]"/>
					Singing <input value="singin" type="checkbox" name="hob[]"/>
					
					Playing <input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
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
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>