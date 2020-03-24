<?php 
$email= $_SESSION['user'];
if (!isset($_SESSION['user'])) {
  # code...
  header("Location: ../index.php?option=login");
  exit();
}
extract($_POST);
if (isset($sub)) {
  # code...
  $creadit0=$creadit1+$creadit2+$creadit3+$creadit4+$creadit5+$creadit6+$creadit7;

  $sub=($creadit1*$grade1)+($creadit2*$grade2)+($creadit3*$grade3)+($creadit4*$grade4)+($creadit5*$grade5)+
  ($creadit6*$grade6)+ ($creadit7*$grade7);
  if($creadit0==0){
    echo "<span style='color:red;'>Please Fill All The Fields</span>";

  }
  else{ $result=$sub/$creadit0;}
 
}
?>
<h2>GPA CALCULATOR</h2>


<table class="table table-bordered" >
<Tr class="danger">
    <th colspan='3'>Result:<?php if (isset($result)) {
      # code...
      echo"\t". $result; }?>
    </th>
    
    </Tr>
	<Tr class="success">
		<th>Cource Name</th>
    <th>Grade</th>
    <th>Credits</th>
   
		</Tr>
		  <form action="" method="post">
      <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade1' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit1' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>
        

       <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade2' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit2' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>

       <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade3' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit3' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>

       <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade4' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit4' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>
      

       <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade5' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit5' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>
        <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade6' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit6' class='form-control'><option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>
        <tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade7' class='form-control'><option value='4.00'>
        A</option><option value='3.70'>
        A-</option><option value='3.30'>
        B+</option><option value='3.00'>
        B</option><option value='2.70'>
        B-</option><option value='2.30'>
        C+</option><option value='2.00'>
        C</option><option value='1.70'>
        C-</option><option value='1.00'>
        D</option>
        <option value='0.00'>
        F</option></select></td><td><select name='creadit7' class='form-control'>
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        </select></td>
        </tr>
        
       <tr><td colspan="3"><input type='submit' name='sub' value="Calculate GPA" class="form-control btn btn-success"></td></tr>

       </form>
      
   
		
</table>
