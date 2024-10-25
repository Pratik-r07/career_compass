<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	
    <meta charset="UTF-8">
    <title>Courses </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto; 
        margin-top: 120px;
        
        background-color: white;
        color: black;
        
        
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 20px;  background-color: white;}
    </style>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.php">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<!-- <div class="widget tags-widget">
					<a class="tag" href="#web">Database</a>
					<a class="tag" href="#prog">Cyber Security</a>
					<a class="tag" href="#net">Networking</a>
					<a class="tag" href="#">AIML</a>
					<a class="tag" href="#bootstrap">Graphic Designing</a>
					<a class="tag" href="#web">Web Development</a>
					<a class="tag" href="#">Project Managment</a>
					<a class="tag" href="#">Business Analyst</a>
				</div> -->
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Database</h2><br>
						</div>
						<br>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://youtu.be/ztHopE5Wnpc?si=DAKyWTzAGbMaqFRm" target="_blank" class="course-img">
									<img src="./img/dbc1.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/ztHopE5Wnpc?si=DAKyWTzAGbMaqFRm" target="_blank" style="font-size:18px; text-align: center">Design your Database</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Database Designing</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="https://youtu.be/dl00fOOYLOM?si=RKnxpJ5MwA_eAeVP" target="_blank" class="course-img">
									<img src="./img/dbc2.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://youtu.be/dl00fOOYLOM?si=RKnxpJ5MwA_eAeVP" target="_blank" style="font-size:16px; text-align: center"><b>A Placement Ready Course </b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">DBMS Crash Course</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.freecodecamp.org/news/learn-sql-free-relational-database-courses-for-beginners/#relational-database-freecodecamp-curriculum" target="_blank" class="course-img">
									<img src="./img/dbc3.png " alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.freecodecamp.org/news/learn-sql-free-relational-database-courses-for-beginners/" target="_blank" style="font-size:18px; text-align: center">Learn RDBMS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Relational Databases</span>
										<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/oracle-sql" class="course-img" target="_blank">
									<img src="./img/dbc4.webp" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/oracle-sql" target="_blank" style="font-size:18px; text-align: center">Introduction to Oracle RDBMS</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Oracle Learning</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/basics-of-computer-networking" target="_blank" class="course-img">
									<img src="./img/netc1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/basics-of-computer-networking" target="_blank" style="font-size:18px; text-align: center">Networking</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Networking</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.shiksha.com/online-courses/the-bits-and-bytes-of-computer-networking-course-courl675" target="_blank" class="course-img">
									<img src="./img/netc2.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.shiksha.com/online-courses/the-bits-and-bytes-of-computer-networking-course-courl675" target="_blank" style="font-size:18px; text-align: center">Bits and Bytes Computer Networking</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Computer Networks</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.shiksha.com/online-courses/preparing-for-professional-cloud-network-engineer-journey-course-courl4974" target="_blank" class="course-img">
									<img src="./img/netc3.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.shiksha.com/online-courses/preparing-for-professional-cloud-network-engineer-journey-course-courl4974" target="_blank" style="font-size:18px; text-align: center">Cloud Network</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Cloud Network</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.shiksha.com/online-courses/introduction-to-computers-and-operating-systems-and-security-course-courl6150" class="course-img" target="_blank">
									<img src="./img/netc4.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.shiksha.com/online-courses/introduction-to-computers-and-operating-systems-and-security-course-courl6150" target="_blank" style="font-size:18px; text-align: center">OS and Networking</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">OS/Networking</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/introduction-to-artificial-intelligence-in-software-testing/" target="_blank" class="course-img">
									<img src="./img/aic2.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/introduction-to-artificial-intelligence-in-software-testing/" target="_blank" style="font-size:18px; text-align: center">AI in Software Testing</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">AIML</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/fundamentals-of-machine-learning-through-python/" target="_blank" class="course-img">
									<img src="./img/aic3.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/fundamentals-of-machine-learning-through-python/" target="_blank" style="font-size:18px; text-align: center">Introduction ML through Python</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">AIML</span>
									<span class="course-price course-premium">Partially Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/ai-in-healthcare" target="_blank" class="course-img">
									<img src="./img/aic1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/ai-in-healthcare" target="_blank" style="font-size:18px; text-align: center">AI In Healthcare</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">AIML</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.cloudskillsboost.google/paths/17/course_templates/593" class="course-img" target="_blank">
									<img src="./img/aic4.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.cloudskillsboost.google/paths/17/course_templates/593" target="_blank" style="font-size:18px; text-align: center">Intro to AI-ML</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">AIML</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Cyber Security</h2>
                        </div>
                        <br>
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-information-security" class="course-img">
									<img src="./img/csc1.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-information-security" target="_blank" style="font-size:18px; text-align: center">Information Security</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Security</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-application-security" class="course-img" target="_blank">
									<img src="./img/csc2.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-application-security" target="_blank" style="font-size:18px; text-align: center;" >Application Security</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Security</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-software-development-security" class="course-img" target="_blank">
									<img src="./img/csc3.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/introduction-to-software-development-security" target="_blank" style="font-size:18px; text-align: center">Software Development Security</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Security</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="hhttps://www.mygreatlearning.com/academy/learn-for-free/courses/network-security" class="course-img" target="_blank">
									<img src="./img/csc4.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/network-security" target="_blank" style="font-size:18px; text-align: center">Network Security</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Security</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/web-developer-course-on-creating-a-business-website/" target="_blank" class="course-img">
									<img src="./img/web1.jpeg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/web-developer-course-on-creating-a-business-website/" target="_blank" style="font-size:18px; text-align: center">Web Developer Course</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/create-your-own-website-in-2-hours/" class="course-img" target="_blank">
									<img src="./img/web2.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/create-your-own-website-in-2-hours/" target="_blank" style="font-size:18px; text-align: center">Web Project</a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-premium">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.mygreatlearning.com/academy/learn-for-free/courses/react-js-tutorial" target="_blank" class="course-img">
									<img src="./img/web3.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.mygreatlearning.com/academy/learn-for-free/courses/react-js-tutorial" target="_blank" style="font-size:18px; text-align: center">React JS Tutorial</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" class="course-img">
									<img src="./img/coursecp.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.udemy.com/course/the-complete-c-programming/" target="_blank" style="font-size:18px; text-align: center">Complete C programming</a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category">Programming</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="prog">Server Side</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>PHP Tips, Tricks, and Techniques</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursesql.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>SQL Tutorial</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursend.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Node.js crash course</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="https://www.w3schools.com/git/default.asp" target="_blank" class="course-img">
									<img src="./img/coursegit.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="https://www.w3schools.com/git/default.asp" target="_blank" style="font-size:18px; text-align: center"><b>Mastering Git</b></a>
								<div class="course-details" style="margin: 5px;">
									<span class="course-category">Server Side</span>
									<span class="course-price course-free">Free</span>
								</div>
								<br>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
	
		
</html>
