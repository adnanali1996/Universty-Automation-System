<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>ACOM&ANOT</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
  
    <li><a href="index.php"><strong>ACOM&ANOT</strong></a></li>
    <li><a href="online_notice.php"><span class="glyphicon glyphicon-envelope"></span> Online Notice Board</a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Stuedent</a></li>
      <li><a href="index.php?option=logint"><span class="glyphicon glyphicon-log-in"></span> Teacher</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/8.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
   
  
   
  </div>
  <!-- Controls -->

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>

	<div class="col-sm-12">
			<div class="panel panel-default">
			
  <div class="panel-heading"><h4>Latest news</h4></div>
  <div class="panel-body">
  <?php
  $sql = "SELECT * FROM latest_news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<marquee>".$row['news']."</marquee>";
    }
} else {
    echo "0 results";
}

  ?>
   
  </div>
</div>
		
		</div>
<div class="container">
	<div class="row">
	<!-- container -->

		<div class="col-sm-12">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="logint")
			{
			//include('logint.php');
				header("location:teacher");
				
			}
		}
		
		?>
		
		<table class="table"><tr ><td><img src="images/notices/1.jpg" width="500" height="500"></td>
		<td ><img src="images/notices/2.jpg" width="500" height="500"></td></tr></table>
		
		
		
		</div>
	<!-- container -->
		<br>
		<div class="col-sm-12">
			<div class="panel panel-default">
			
  
  
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="#"> Developed by  Adnan Ali</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>