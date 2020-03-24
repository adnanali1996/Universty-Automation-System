<?php 
$email= $_SESSION['user'];
if (!isset($_SESSION['user'])) {
  # code...
  header("Location: ../index.php?option=login");
  exit();
}
extract($_POST);
?>
<h2>GPA CALCULATOR</h2>
<form action="" method="post">
Enter Number of Subjects:-<input type="text" name="cond" ><input type="submit" name="sub"> </form><br>

<table class="table table-bordered">
	<Tr class="success">
		<th>Cource Name</th>
    <th>Grade</th>
    <th>Credits</th>
   
		</Tr>
		<?php
   
   
      if (isset($sub)) {
      # code...
        
       if ($cond=='') {
         # code...
        echo "Please Enter Number of Cources";
        exit();
       }
        
          # code...
       $gra=0;
          for ($i=0; $i <$cond ; $i++) { 
      # code...
        echo "<form method='post' action=''><tr><td><input type='text' name='subj' placeholder='Subject Name' class='form-control'></td><td><select name='grade' class='form-control'><option value='4.00'>
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
        F</option></select></td><td><select name='creadit' class='form-control'><option value='1'>
        1</option><option value='2'>
        2</option><option value='3'>
        3</option><option value='4'>
        4</option><option value='5'>
        5</option><option></select></td>
        </tr></form>";
        
    
        }

      
    } 
 
    
   
    ?>
		
</table>
