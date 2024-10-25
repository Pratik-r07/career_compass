<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto;     
        background-color: white;
        color: black;
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 20px;  background-color: white;}
    </style>
</head>


        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" ></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Confused? I'm here to direct you!</h1>
							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Find your Roles<br>Answer my questions and I'll find the best suited roles for you!</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Find your Role<br>Answer my questions and I'll find the best suited roles for you!</b></p>

									<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Career Compass</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						<p class="lead"><b style="color: rgb(56, 48, 48);">Career Compass</b> is one stop destination <br>in helping you understand yourself, the best career for you <br> and providing all the resources in the process.</p>
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Prediction</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Career Prediction</h4></a>
									
								
							<?php endif ?>
								
								<p>Take the test to find the perfect role for you after Engineering.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Knowledge Network</h4>
								</a>
								<p>Gain knowledge through various sources, like important informational links, access to study materials, etc.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Links to relevant Courses.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style=""></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
									<p class="lead white-text" >We consider your choices and suggest a suitable path for you!.</p>
									<a class="main-button icon-button" href="register.php">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" >We consider your choices and suggest a suitable path for you!</p>
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">Why Career Compass?</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">At career compass we direct  students with best-suited job roles based on their interests and skills providing them the information about roles & responsibilties.<br> Check out our free course page to begin your IT career with!</p>
							<!--Education seekers get a personalised experience on our site, based on educational background and career interest, enabling them to make well informed course and college decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other Shiksha.com users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Central, Common Application Form, Top Colleges, College Compare, Alumni Employment Stats, Campus Connect, College Reviews, College Predictors, MyShortlist and Shiksha Café.-->
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/pic1.jpg" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->



</html>
