<!DOCTYPE html>
<html lang="en">
<?php
 ob_start();
session_start();
include ('../connect.php');
include ('functions.php');
$Tid=$_SESSION['teacher'];

$result = $dbc->query("SELECT Teacher_id,T_name,T_pic,T_email,T_phone,T_gender,date_format(t_dob,'%d-%M-%Y') as dob,designation,branch_id from teacher where teacher_id='$Tid'"); 
while($row = $result->fetch_assoc()){ 
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
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/gallery.css">
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  <link href="../css/gallery.min.css" rel="stylesheet">-->
	<link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
	
<style>

.grad{
	min-height:500px;
}

</style>

	
  </head>


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-image:url(../images/bp2.jpg);background-repeat: no-repeat;background-attachment:fixed;
 background-size:100% 100%;">
	  
	  
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container-fluid">
	      <img class="row-3 img-fluid" src="../images/logo-wide.png" alt="ait logo" style="max-width:100%; height:auto;"/>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="teacherhome.php" class="nav-link"><span>Profile</span></a></li>
	           <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>View</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="viewstudents.php">Students</a>
				</div>
			</li>
			 <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Add</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="addmarks.php">Marks</a>
				</div>
			</li>
			<li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span>Assignments</span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="tassignments.php">Post</a>
					<a class="dropdown-item" href="viewassignments.php">View</a>
				</div>
			</li>
			  <li class="nav-item dropdown"><a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown"><span><?php echo $row['T_name']?></span></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
	        </ul>
			
	      </div>
	    </div>
	 </nav>
	 


    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section" style="margin-top:150px;">
   <div class="container-fluid bg-white">
    		<div class="row">
    			<div class="col-md-2">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Dashboard</a></li>
					      <li><a href="#page-2">News</a></li>
					      <li><a href="#page-4">Gallery</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page one">
					  
						
					<div class="owl-carousel">
					
						<div class="card grad" style="width:300px;background-image: linear-gradient(to bottom, #fc5c7d, #6a82fb);">
						   <div class="card-body ">
								<h4 class="card-title">Webinar</h4>
							</div>
							<div class="card-body">
								<p class="card-text text-white">National Webinar on "POST COVID-19 ERA IN EDUCATION AND TECHNOLOGY</p>
								<p class="card-text text-white">Date: 05-06-2021 Saturday</p>
								<p class="card-text text-white">Time: 10.30 AM</p>
								<p class="card-text text-white">Registration Link: https://forms.gle/WcwwiYA4MrFmRLoHA</p>
								<a href="https://forms.gle/WcwwiYA4MrFmRLoHA" target="_blank" class="btn btn-primary stretched-link mx-auto">Visit</a>
							</div>
						</div>
						
					   <div class="card grad" style="width:300px;background-image: linear-gradient(to bottom, #00b09b, #96c93d);">
							<div class="card-body ">
								<h4 class="card-title">Career Labs</h4>
							</div>
							<div class="card-body">
								<p class="card-text text-white">Notice for 3rd Year Students <br>Registration Link Valid Till 11pm Today</p>
								<p class="card-text text-white">Date: Link valid Till 11 PM today</p>
								<p class="card-text text-white">Eligibility Criteria: Students in 3rd Year of Engineering (6th Semesters)</p>
								<a href="https://blog.thecareerlabs.com/campus-ambassador-application/" target="_blank" class="btn btn-primary stretched-link mx-auto">Visit</a>
							</div>
						</div>
						
					<div class="card grad" style="width:300px;background-image: linear-gradient(to bottom, #ff9966, #ff5e26);" >
						 <div class="card-body ">
								<h4 class="card-title">AGILE METHODOLOGY</h4>
							</div>
							<div class="card-body">
								<p class="card-text text-white">Topic: FUTURE READY SKILLS FOR 1ST GEN Agile Methodology </p>
								<p class="card-text text-white">May 26, 2021 05:15 PM India</p>
								<p class="card-text text-white">We are inviting you to a scheduled Zoom meeting.<br>Meeting ID: 816 3841 9938<br>Passcode: 199742</p>
								<a href="https://us02web.zoom.us/j/81638419938?pwd=YTdJb0Yva09Bb2lubUN3VEZwV1RsUT09" target="_blank" class="btn btn-primary stretched-link mx-auto">Visit</a>
							</div>
						</div>
						
						<div class="card grad" style="width:300px;background-image: linear-gradient(to bottom, #00f260, #0575e6);">
						  <div class="card-body ">
								<h4 class="card-title">ANANYA SAP LABS</h4>
							</div>
							<div class="card-body">
								<p class="card-text text-white">Topic : ANANYA SAP LABS FUTURE READY SKILL SETS Negotiation Skills </p>
								<p class="card-text text-white">Time: May 24, 2021 04:00 PM </p>
								<p class="card-text text-white">We are inviting you to a scheduled Zoom meeting.<br>Meeting ID: 822 1259 2709<br>Passcode: 088268</p>
								<a href="https://us02web.zoom.us/j/81638419938?pwd=YTdJb0Yva09Bb2lubUN3VEZwV1RsUT09" target="_blank" class="btn btn-primary stretched-link mx-auto">Visit</a>
							</div>
						</div>
						
						<div class="card grad" style="width:300px;background-image: linear-gradient(to bottom, #7f00ff, #e100ff);">
						  <div class="card-body ">
								<h4 class="card-title">ANANYA SAP LABS</h4>
							</div>
							<div class="card-body">
								<p class="card-text text-white">Topic :cyber crime and security</p>
								<p class="card-text text-white">Time: May 26, 2021 04:00 PM </p>
								<p class="card-text text-white">We are inviting you to a scheduled Zoom meeting.<br>Meeting ID: 822 1259 2709<br>Passcode: 088268</p>
								<a href="https://us02web.zoom.us/j/81638419938?pwd=YTdJb0Yva09Bb2lubUN3VEZwV1RsUT09" target="_blank" class="btn btn-primary stretched-link mx-auto">Visit</a>
							</div>
						</div>
						
					
					</div>
					
						
					  </div>
					  
					  
					  <div id="page-2" class= "page two">
					  		<h2 class="heading">NEWS</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center" data-aos="zoom-in">
					    		<span class="icon-bell"></span>
					    	</div>
					    	<div class="text pl-3" data-aos="fade-up">
		    					<span class="date">30/05/2021</span>
		    					<h2>SEE EXAMS FOR 4TH 6TH 8TH SEM</h2>
		    					<p>Timetable announced</p>
		    					<p><button class="btn btn-secondary">Visit</button></p>
	    					</div>
	    				</div>
						
	    				 <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="icon-bell"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">01/05/2021</span>
		    					<h2>PAY THE EXAM FEE BEFORE 15/05/2021</h2>
		    					<p>Click here to pay online</p>
		    					<p><button class="btn btn-secondary">Visit</button></p>
	    					</div>
	    				</div>
						
	    				 <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="icon-bell"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">01/04/2021</span>
		    					<h2> CALENDAR OF EVENTS</h2>
		    					<p>Calendar of Events for 2nd sem UG & PG</p>
		    					<p><a href="../docs/COE.pdf" target="_blank" ><button class="btn btn-secondary">Visit</button></a></p>
	    					</div>
	    				</div>
						
	    			 <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="icon-bell"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">11/05/2021</span>
		    					<h2>EXAM CIRCULAR</h2>
		    					<p> Semester End Makeup Examination Application</p>
		    					<p><button class="btn btn-secondary">Visit</button></p>
	    					</div>
	    				</div>
					  </div>
					  
					  
					  
			<div id="page-4" class= "page four">
		<div class="container" style="margin-top:40px;">
            <h2>Gallery</h2>
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/18.jpg" data-src="../images/18.jpg" data-sub-html="<h4>AI LAB OPENING</h4><p>Inaguration of IOT and AI Lab </p>">
                        <a href="">
                            <img class="img-responsive" src="../images/18.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/2.jpg" data-src="../images/2.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/2.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/3.jpg" data-src="../images/3.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/3.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/4.jpg" data-src="../images/4.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/4.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/5.jpg" data-src="../images/5.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/5.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/6.jpg" data-src="../images/6.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/6.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/7.jpg" data-src="../images/7.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/7.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/8.jpg" data-src="../images/8.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/8.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/9.jpg" data-src="../images/9.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/9.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/10.jpg" data-src="../images/10.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/10.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/11.jpg" data-src="../images/11.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/11.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/12.jpg" data-src="../images/12.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/12.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/13.jpg" data-src="../images/13.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/13.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/14.jpg" data-src="../images/14.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/14.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/15.jpg" data-src="../images/15.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/15.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/16.jpg" data-src="../images/16.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/16.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/17.jpg" data-src="../images/17.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/17.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/1.jpg" data-src="../images/1.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/1.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/19.jpg" data-src="../images/19.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/19.jpg">
                        </a>
                    </li>
					<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="../images/20.jpg" data-src="../images/20.jpg" data-sub-html="<h4>MATRI 2019</h4><p>Excited Students</p>">
                        <a href="">
                            <img class="img-responsive" src="../images/20.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
					 
				</div>
			</div>
					   
	    				
	    			
	    				
					  </div>
					</div>
			  </div>
    	</div>
		

    </section>


   

    
 


   
		
<?php
 } 
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
  <script src="../js/main.js"></script>
  <script src="../js/gallery.js"></script>
  <script type="text/javascript" src="../js/vanilla-tilt.js"></script>
  <script>
  AOS.init();
</script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".grad"), {
		max: 25,
		speed: 400, 
		glare: true,
    "max-glare":1
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".grad"));
</script>
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
            $(document).ready(function(){
                $('#lightgallery').lightGallery(); 
            });
        </script>
  </body>
</html>