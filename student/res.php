<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$usn=$_SESSION['usn'];

?>
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" media="print" href="print.css" />
	
	 <script type="text/javascript" src="../js/loader.js"></script>
    <script type="text/javascript">
       google.charts.load("current", {packages:['corechart']});
		google.charts.setOnLoadCallback(drawChart);
<?php
$result = $dbc->query("SELECT sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,cgpa  from performance where usn='$usn' "); 

while($row = $result->fetch_assoc()){ 

?>
     function drawChart() {
      var data = google.visualization.arrayToDataTable([
		  ['Move', 'SGPA',{ role: "style" }],
          ["SEM 1", <?php echo $row['sgpa1']?>,'cyan'],
          ["SEM 2", <?php echo $row['sgpa2']?>,'aqua'],
          ["SEM 3", <?php echo $row['sgpa3']?>,'aqua'],
          ["SEM 4", <?php echo $row['sgpa4']?>,'aqua'],
          ['SEM 5', <?php echo $row['sgpa5']?>,'aqua'],
          ["SEM 6", <?php echo $row['sgpa6']?>,'aqua'],
          ["SEM 7", <?php echo $row['sgpa7']?>,'aqua'],
          ['SEM 8', <?php echo $row['sgpa8']?>,'aqua'],
          ['CGPA', <?php echo $row['cgpa']?>,'springgreen']
      ]);
<?php } ?>

 var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
		title:"SGPA - CGPA GRAPH",
        width: 1000,
        height: 500,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart"));
      chart.draw(view, options);
}
    </script>
	
	
	<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);
<?php
$result = $dbc->query("SELECT a.sub_code,a.at_cie1,a.at_cie2,a.final_att 
						from attendence a,subjects s 
						where a.sub_code=s.sub_code and
						s.sem=6  and a.usn='$usn' "); 
 
        if($result->num_rows > 0){
            

?>
     function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['subcode', 'attendence1', 'attendence2',  'final_attendence'],
	<?php  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo '['. '"'. $row['sub_code'].'"'.', '.$row['at_cie1'].', '.$row['at_cie2'].' ,'.$row['final_att'].'],';
	 }}?>
          
        ]);
	

   var options = {
          title : 'Attendence ',
          vAxis: {title: '%'},
          hAxis: {title: 'Subjects'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/42.jpg);background-repeat: no-repeat;background-attachment:fixed;
 background-size:100% 100%;">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid" >
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="shome.php" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="studenthome.php" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="results.php" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="studenthome.php#payment" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="assignments.php" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $_SESSION['studentname']; ?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
 
 
 <section id="result" style="margin-top:150px;">
	<div class="container-fluid bg-white shadow mx-auto p-4 mb-5">
		<h2 class="text-center">RESULT</h2>
			<h5 class="text-center text-success"><?php echo $_SESSION['usn'].'  -  '.$_SESSION['studentname']; ?></h5>		
			<font color="white">
					</font><table class="table table-dark table-hover table-striped" id="tableData" border="2">
			<thead data-aos="fade-up">
				<tr>
					<th>Subject</th>
					<th>Credits(R)</th>
					<th>CIE-1</th>
					<th>Att-l</th>
					<th>CIE-2</th>
					<th>Att-2</th>
					<th>CIE-M</th>
					<th>Att-F</th>
					<th>Assignment</th>
					<th>Group Activity</th>
					<th>Final CIE</th>
					<th>SEE Grade</th>
					
				</tr>
			</thead>
			<tbody>
<?php 
		
$query="SELECT s.sub_code,s.credits,m.cie1,m.cie2,m.cie3,m.finalcie,m.assignment,m.activity,m.grade,a.at_cie1,a.at_cie2,a.final_att from subjects s,marks m,attendence a where s.sub_code=m.sub_code and m.sub_code=a.sub_code and m.usn=a.usn and m.usn='$usn'"; 
	$result = @mysqli_query($dbc, $query);  
        if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
				
		<tr id="somerow" data-aos="fade-up">
							<td ><?php echo $row['sub_code'] ;?></td>
							<td ><center><?php echo $row['credits'] ;?></center></td>
							<td ><center><?php echo $row['cie1'] ;?></center></td>
							<td ><center><?php echo $row['at_cie1'] ;?></center></td>
							<td ><center><?php echo $row['cie2'] ;?></center></td>
							<td ><center><?php echo $row['at_cie2'] ;?></center></td>
							<td ><center><?php echo $row['cie3'] ;?></center></td>
							<td ><center><?php echo $row['final_att'] ;?></center></td>
							<td ><center><?php echo $row['assignment'] ;?></center></td>
							<td ><center><?php echo $row['activity'] ;?></center></td>
							<td ><center><?php echo $row['finalcie'] ;?></center></td>
							<td ><center><?php echo $row['grade'] ;?></center></td>
							
							</tr>
<?php }
		}
		?>
				</tbody>
			</table><font color="white">
		</font></div><font color="white">
	
	</div>
 </section>

<div class="container shadow-lg bg-white p-2 mb-5" style="height:auto;" >
	<h2 class="text-center">PERFORMANCE</h2>
		<h5 class="text-center text-success"><?php echo $_SESSION['usn'].'  -  '.$_SESSION['studentname']; ?></h5>
		<div class="row">
			<div id="chart" class=" col-lg-12 mx-auto p-2" style="width:1000px;height:500px;" >
			</div>
		<br>
		</div>
</div>

<section id="attendence">
	<div class="container shadow-lg bg-white p-2 mb-5" style="height:auto;" >
	<h2 class="text-center">ATTENDENCE</h2>
	<h5 class="text-center text-success"><?php echo $_SESSION['usn'].'  -  '.$_SESSION['studentname']; ?></h5>
	<div class="row">
	<div id="chart_div" class=" col-lg-12 mx-auto p-2" style="width:1000px;height:500px;" >
	</div>
	<br>
	</div>
</div> 
</section>
		
<?php
 
ob_flush();

require('../footer.php');
?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  
  <script src="../js/main.js"></script>
    <script type="text/javascript" src="../js/vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".your-element"), {
		max: 25,
		speed: 400, 
		glare: true,
    "max-glare":1
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>
    
  </body>
</html>