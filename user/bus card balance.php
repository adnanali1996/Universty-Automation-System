<?php 
$email= $_SESSION['user'];
if (isset($_SESSION['cms_id'])) {
  # code...
  $cmsid=$_SESSION['cms_id'];
  
}

if (!isset($_SESSION['user'])) {
  # code...
  header("Location: ../index.php?option=login");
  exit();
}

$sql = "SELECT * FROM bus_card Where cms_id=$cmsid";
$result = $conn->query($sql);

if ($result->num_rows >0) {
   
   while ( $row = $result->fetch_assoc()) {
    	# code... 
          $balance=$row['balance'];
   
    } 
         
    }
 else {
    echo "0 results";
}

?>
<h2>Bus Card Remaning Balance</h2>

<table class="table table-bordered">
	
		
    <?php
    if ($balance>30) {
      # code...
      echo'<Tr class="success">';
      echo"<th>Your Remaning Bus Card Balance is $balance</th></Tr>";
    }
    else
    {
      echo'<Tr class="danger">';
      echo"<th>Your Remaning Bus Card Balance is $balance</th></Tr>";
    }
     ?>
    
		
		
		
</table>
