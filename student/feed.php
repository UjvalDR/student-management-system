<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$usn=$_SESSION['usn'];
$name=$_SESSION['studentname'];
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
	<link rel="stylesheet" href="../css/gallery.css">
    <script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--  <link href="../css/gallery.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
	
	<style>
* {
  box-sizing: border-box;
}

body {
  background-color: white;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}





/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>


  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid" >
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="studenthome.php" class="nav-link"><span>Profile</span></a></li>
	          <li class="nav-item"><a href="results.php" class="nav-link"><span>Results</span></a></li>
	          <li class="nav-item"><a href="studenthome.php#payment" class="nav-link"><span>Payment</span></a></li>
	          <li class="nav-item"><a href="assignments.php" class="nav-link"><span>My Assignments</span></a></li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $name?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
	      </div>
	    </div>
	 </nav>
	 

   

<section class="ftco-section ftco-no-pb goto-here" id="resume-section">

	<div class="container shadow bg-white rounded-lg">
    	<form id="regForm" action="/action_page.php">
			<h1>Feedback</h1>
			<!-- One "tab" for each step in the form: -->
			
			<div class="tab">
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Branch : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="branch" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="AE">AE</option>
								<option value="CSE">CSE</option>
								<option value="CV">CV</option>
								<option value="EC">EC</option>
								<option value="EEE">EEE</option>
								<option value="IE">IE</option>
								<option value="IM">IM</option>
								<option value="IS">IS</option>
								<option value="ME">ME</option>
								<option value="MEE">MEE</option>
							    <option value="TC">TC</option>
							</select>
						</div>
					</div>
				</div>
			</div>
				<div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Semester : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="sem" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="1">I  Sem</option>
								<option value="2">II  Sem</option>
								<option value="3">III Sem</option>
								<option value="4">IV  Sem</option>
								<option value="5">V  Sem</option>
								<option value="6">VI  Sem</option>
								<option value="7">VII Sem</option>
								<option value="8">VIII  Sem</option>
							</select>
						</div>
					</div>
				</div>
			</div>
            
			 <div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Section : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="sec" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-sm-12 mt-3">
					<div class="row">
						<div class="col-lg-4 col-sm-2">
							<h5 class="mt-2 ml-2">Subject : </h5>
						</div>
			  
						<div class="col-lg-8 col-sm-10">
							<select name="sec" class="custom-select" required>
								<option selected> Select From Below</option>
								<option value="A">18CS61 Internet of Things</option>
								<option value="B">18CS62 Machine Learning</option>
								<option value="C">18CS63 Unix Programming</option>
								<option value="D">18CS64 Compiler Design</option>
								<option value="D">18CS65 Management And Entrepreneurship</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			<div class="tab"><h6 class="text-danger text-center">1-Not Satisfactory &nbsp; 2-Satisfactory &nbsp; 3-Good &nbsp; 4-Very Good &nbsp;  5-Excellent</h6>
				<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<h5 class="mt-2 ml-2">1.  How well Did you understand the subject ?  </h5>
						</div>
						</div>
						<div class="row">
						<div class="col-lg-8 col-sm-10 mt-2">
							   <div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio" name="Gender" value="Male">
									<label class="custom-control-label" for="customRadio">1</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio2" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio2">2</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio3" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio3">3</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio4" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio4">4</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio5" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio5">5</label>
								</div>
						</div>
						</div>
					
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<h5 class="mt-2 ml-2">1.  Punctuality in engaging the class  </h5>
						</div>
						</div>
						<div class="row">
						<div class="col-lg-8 col-sm-10 mt-2">
							   <div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio" name="Gender" value="Male">
									<label class="custom-control-label" for="customRadio">1</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio2" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio2">2</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio3" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio3">3</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio4" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio4">4</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio5" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio5">5</label>
								</div>
						</div>
						</div>
					
				</div>
			</div>
				<div class="row">
				<div class="col-lg-8 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<h5 class="mt-2 ml-2">2. Planning and Presentation of the lesson </h5>
						</div>
						</div>
						<div class="row">
						<div class="col-lg-8 col-sm-10 mt-2">
							   <div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio" name="Gender" value="Male">
									<label class="custom-control-label" for="customRadio">1</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio2" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio2">2</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio3" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio3">3</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio4" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio4">4</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="customRadio5" name="Gender" value="Female">
									<label class="custom-control-label" for="customRadio5">5</label>
								</div>
						</div>
						</div>
					
				</div>
			</div>
			</div>
			
			<div class="tab">Birthday:
				<p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
				<p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
				<p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
			</div>
			
			<div class="tab">Login Info:
				<p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
				<p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
			</div>
			
			<div style="overflow:auto;">
				<div style="float:right;">
					<button class="btn btn-warning" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
				</div>
			</div>
			
			<!-- Circles which indicates the steps of the form: -->
			<div style="text-align:center;margin-top:40px;">
			<span class="step"></span>
			<span class="step"></span>
			<span class="step"></span>
			<span class="step"></span>
			</div>
		</form>
</div>
					
						
					  
					  
					  
					 
		
    </section>

	
	
	
   
 


   
		
<?php
  
ob_flush();

require('../footer.php');
?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="../js/gallery.js"></script>
  <script src="../js/main.js"></script>

  
  <script>
  $(document).ready(function(){
  
  var owl = $('.owl-carousel');
   owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
	autoWidth:true,
    autoplayHoverPause:true
});
$('.grad').tilt({
    glare: true,
    maxGlare: .5
})
});
</script>

<script>
  AOS.init();
</script>

   <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script>
		
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
  </body>
</html>