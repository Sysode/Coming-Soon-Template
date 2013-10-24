<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>SiteName &middot; Coming to you soon!</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Description for your site">
		<meta name="keywords" content="Site Keywords">
		<meta name="author" content="Reece Matthews">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" /><!-- Responsive -->
		<meta charset="UTF-8">
		<!-- Extra links for fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700|Open+Sans:400italic,300,400,700" rel="stylesheet" type="text/css"/>
		
		
		<!-- Styles - including: Font-Awesome for vector icons & custom styles. -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/global.css" rel="stylesheet">
		<!-- End -->
	</head>
	
	<body>
		<div class="section group thecontent">
			<h4 class="left"><a href="index.php">SiteName</a></h4>

			<h4 class="right"><a href="#newsletter">Send me updates!</a></h4>

			<h1 id="fade1">Something epic is coming soon!</h1>

				<h2 id="fade2">Stay tuned and keep checking back for more info</h2>

				<!-- Cards for displaying date -->
			<div class="date-display" id="countdown" style="margin-bottom:35px;">
			<!-- Each time format uses this layout -->
			<div class="col span_1_of_5">
				<div class="weeks_dash">
					<div class="box">
					<small>Weeks:</small>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
			</div>
			<!-- End first, start second and so on.. -->
			<div class="col span_1_of_5">
				<div class="days_dash">
					<div class="box">
					<small>Days:</small>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
			</div>

			<div class="col span_1_of_5">
				<div class="hours_dash">
					<div class="box">
					<small>Hours:</small>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
			</div>
		<div class="col span_1_of_5">
			<div class="minutes_dash">
				<div class="box">
					<small>Minutes:</small>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
			</div>
			<div class="col span_1_of_5">
				<div class="seconds_dash">
					<div class="box">
						<small>Seconds:</small>
							<div class="digit">0</div>
							<div class="digit">0</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fix"></div><!-- fix -->

			<section class="work" id="newsletter">
				<h1>Sign up to our newsletter</h1>
					<h4>Sign up to our newsletter and recieve the latest information direct to your inbox! Never miss out again...</h4>
						<input type="name" class="name" placeholder="Your Name">
						<input type="name" class="email" placeholder="Your Email Address">
						<input type="submit" value="Send Request">
			</section>

			<section class="about">
				<h1>Some extra info</h1>
					<div class="col span_1_of_3">
						<i class="fa fa-check"></i>
						<p>
							This is some text you can add here about your site,
							try to keep it short and simple though.. Also make it
							direct to your specific point if you can :-)
						</p>
					</div>

					<div class="col span_1_of_3">
						<i class="fa fa-group"></i>
						<p>
							This is some text you can add here about your site,
							try to keep it short and simple though.. Also make it
							direct to your specific point if you can :-)
						</p>
					</div>

					<div class="col span_1_of_3">
						<i class="fa fa-cloud"></i>
						<p>
							This is some text you can add here about your site,
							try to keep it short and simple though.. Also make it
							direct to your specific point if you can :-)
						</p>
					</div>
					<div class="fix"></div><!-- fix -->
			</section>
		</div>

<!-- Javascript includes at bottom to increase page load time -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="effects.js"></script>
	<script src="https://googledrive.com/host/0Bza3emUujzWYaGFPejNYZEpoSFU/js/jquery.lwtCountdown-1.0.js"/></script>
	<script type="text/javascript">
            $(document).ready(function() {
                $('#countdown').countDown({
                    targetDate: {
                        'day': 30,
                        'month': 12,
                        'year': 2014,
                        'hour': 17,
                        'min': 54,
                        'sec': 10
                    }
                   

                });
            });
        </script>
	</body>
	</html>