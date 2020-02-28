<?php

require("vendor/autoload.php");

?><!doctype html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Columbia Greene FCU - Be Unbanked</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css?v=3">
	<script src="js/head.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126452472-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-126452472-1');
	</script>
	
</head>
<body>
	<main class="container">
		
		<header class="wrap">
			<a href="https://www.cgfcu.org/" target="_blank"><img src="img/header.jpg?v=2" class="header"></a>
		</header>
		
		<div class="wrap">	
			<div class="content group">
	
				<img src="img/title-funsquad.jpg" alt="Follow the Fun Squad!" />
				<p>The Fun Squad has hit the streets to make our community better. Follow the Fun Squad to see where they will bring the fun next:</p>
				<?php
				$cache = new Instagram\Storage\CacheManager('.cache/');
				$api   = new Instagram\Api($cache);
				$api->setUserName('columbiagreenefcu');

				$feed = $api->getFeed();

				if ( !empty( $feed->medias ) ) {
					$count = 0;
					foreach ( $feed->medias as $insta ) {
						if ( $count < 3 ) { ?>
				<div class="insta-box">
					<img src="img/insta-header.png" class="insta-header" />
					<a href="<?php print $insta->link; ?>"><img src="<?php print $insta->thumbnails[4]->src ?>" class="insta-photo" /></a>
					<img src="img/insta-icons.png" class="insta-icons" />
					<div class="insta-caption"><?php print $insta->caption ?></div>
				</div>
						<?php
						}
						$count++;
					}
				}
				?>

			</div>
		</div>
		
		<div class="wrap bg-swirl-lime">	
			<div class="content group">
	
				<p><img src="img/subtitle-understand.png"></p>
				<p>We get it. You’re <span class="font-gloss">UN</span>inspired when it comes to banking.  Who could blame you? The good news is that you have choices. We’re Columbia-Greene Federal Credit Union. We were started by and for the good local people who live, work, worship, and attend school right here in Columbia and Greene Counties.</p>
				<img src="img/image-big-banks.png" alt="Big banks" class="imageright" />
				<p><strong>We are a local, member-owned financial cooperative dedicated to people, not profit.</strong> We’re here to help you get more for your money. That means lower loan rates and fewer fees and charges. Best of all, you can feel good your money is staying right here to help your neighbors and community.</p>
				<p><a href="https://www.mobicint.net/cgf-live/openAccount" class="btn standard">Start Your Membership Application Online</a></p>
				<h3><span class="font-gloss">UN</span>tether yourself from high fees and interest rates.</h3>

			</div>
		</div>
	
		<div class="bg-lime">
			<img src="img/title-unbank.jpg?v=2" alt="Unbank yourself" />
		</div>
		<div class="wrap">	
			<div class="content">
				<img src="img/subtitle-deserve.png" alt="You deserve unbeatable solutions.">
				<h4>Credit unions are different.</h4>
				<ul>
					<li>We are voted #1 in service*</li>
					<li>We give back to our communities</li>
					<li>We save our members thousands in fees and interest</li>
				</ul>
				<p><strong>Get out from <span class="font-gloss community">UN</span>der high loan rates and fees with low-interest loans for anything under the <img src="img/icon-sun.png"> (as long as it’s legal <img src="img/icon-favorite.png">)</strong></p>
				<img src="img/image-best-of.png" alt="Columbia County Chamber of Commerce: Best of Columbia County 2018" class="imageright">
				<p>We offer low interest loans on just about anything including auto loans, home loans, credit cards, personal loans and more.  If you need it, we can likely finance it for less.</p>
				<p><strong>All the convenience - that’s <span class="font-gloss community">UN</span>deniable!</strong><br>
				You’ll have all the convenience you expect from a big bank with the local service you deserve.  We offer online and mobile banking, free bill pay, access to 30,000+ surcharge ATMs nationwide and more!</p>
				<p><strong>And, not to brag, but were recently named "Best of Columbia County!”</strong></p>
				<p><a href="https://www.mobicint.net/cgf/login/loanapp" class="btn standard">Apply For a Loan</a></p>
			</div>
		</div>
	
		<!--
		<div class="bg-teal">
			<img src="img/title-savings.jpg" alt="Unbelievables savings for our members." />
		</div>
		<a href="https://www.cgfcu.org/whats-going-on-now/"><img src="img/promo.jpg" /></a>
		-->
	
		<div id="connect" class="bg-grey-light">
			<img src="img/title-connect.jpg?v=2" alt="Unanswered questions? Let's connect." />
		</div>
		<div class="bg-lime bg-swirl-darken contact">
			<div class="wrap content">
			<form id="contact" name="contact">
				<strong><div class="error text-red"></div></strong>
				<div class="group">
					<div class="half">
						<p>Your Name:
							<input type="text" name="name" placeholder="Jane Smith" /></p>
						<p>Your Email:
							<input type="text" name="email" placeholder="jane@smith.com" /></p>
						<p>Your Phone Number:
							<input type="text" name="phone" placeholder="123-456-7890" /></p>
						<p>Are you a member?<br>
							<label><input type="radio" name="member" value="yes"> Yes</label>
							<label><input type="radio" name="member" value="no" checked="checked"> No</label>
						</p>
					</div>
					<div class="half">
						<p>Message:
							<textarea name="message" placeholder="Your message."></textarea></p>
					</div>
				</div>
				<p class="text-center"><input type="submit" name="submit" value="Submit" class="btn" /></p>
			</form>
			</div>
		</div>

	
		<div class="bg-white bg-swirl-teal">
			<div class="content bg-social">
				<!--
				<img src="img/subtitle-meet.png" alt="Come meet us at an event.">
				<div class="group">
					<img src="img/photo-fireworks.jpg" class="imageleft thumb">
					<h4>Family Fun & Fireworks at Dutchman's Landing Park</h4>
					<p>Lower Main St., Catskill, NY</p>
					<p><strong>Saturday, September 8 | Family Fun from 6:00 p.m. until 7:45 p.m.<br>
						FIREWORKS start at 7:45 (rain or shine)</strong></p>
					<p><strong>Celebrate with us!</strong><br>
					The credit union is now open to those who live, work, worship, volunteer, or attend school in Columbia or Greene Counties.</p>
					<p><strong>LIVE, in-person with “Bob and Sheri” from 98.5 THE CAT</strong></p>
					<p>PLUS: Free Kiddie Cones for children 12-years and under, prize wheels, caricatures, balloon animals, and family fun contests & games.</p>
				</div>
				<hr>
				<img src="img/photo-food-truck.jpg" class="imageleft thumb">
				<h4>Catskill Food Festival</h4>
				<p><strong>Saturday, September 8 | 1 PM - 6 PM EDT</strong></p>
				<p>We are the premier sponsor of the Catskill Food Festival with food trucks and food vendors, live music, taking over main street in Catskill.</p>
				<p><a href="https://www.facebook.com/events/1027581050733327/">Learn More &gt;</a></p>
				-->
				<div class="text-right">
					<a href="https://www.facebook.com/cgfcu.org/"><img src="img/icon-facebook.png?v=1" alt="Follow us on Facebook for more unpublished events and happenings."></a>
					<a href="https://www.youtube.com/channel/UCapi-j8Ps4LSOYpxgCpXc1A"><img src="img/icon-youtube.png?v=1" alt="Check us out on YouTube!"></a>
				</div>
			</div>
			<div class="footer-bar text-center">
				<div class="fourty">
					<a href="https://www.cgfcu.org/" target="_blank"><img src="img/logo.png" /></a>
				</div>
				<div class="sixty">
					<h4>207A Green Street | Hudson, NY 12534<br>
					518-828-5216  |  <a href="https://www.cgfcu.org" class="text-grey">www.cgfcu.org</a></h4>
				</div>
			</div>

			<div class="fine-print group wrap">
				<div class="content">
					<img src="img/logo-equal-housing.png" class="imageright">
					<p>* <a href="http://www.theacsi.org/industries/finance-and-insurance/credit-union">http://www.theacsi.org/industries/finance-and-insurance/credit-union</a><br><br>
					* APR = Annual Percentage Rate.  Rates, terms and conditions subject to change or end at any time and may vary based on qualifications, including creditworthiness. All loans subject to approval. See credit union for details. Membership eligibility required. Federally insured by NCUA.</p>
				</div>
			</div>
		</div>

	</main>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?v=1"></script>
<script src="js/main.js?v=0"></script>
</body>
</html>