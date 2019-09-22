<!DOCTYPE html>
<html>
<head>
	<title>NewWave Cloud</title>
	<link rel="stylesheet" type="text/css" href="./css/topnav.css">
	<link rel="stylesheet" type="text/css" href="./css/Animation.css">
	<link rel="stylesheet" type="text/css" href="./css/loader.css">
	<link rel="stylesheet" type="text/css" href="./css/plans.css">

	<script src="./js/main.js"></script>
</head>
<body onload="myFunction()" style="margin: 0px; font-family: Arial; background-color: #1b4d83;">
	<h1 style="text-align: center; font-size: 90px; margin-top: 8%; color: white;" id="loaderTitle">NewWave cloud</h1>
	<div id="loader"></div>

	
	<div class="animated fadeInDown slower" style="display:none;" id="myDiv">
		<div style="text-align: center;" class="company">
			<strong><a  href="index">NewWave Cloud</a></strong>
		</div>
		<div class="topnav">
			<strong>
			<a href="index">Home</a>
			<a class="active" href="plans">Plans</a>
			<a href="#contact">Contact</a>
			<a  class="login" href="#panel">Panel</a>
			<a  class="login" href="login">Account</a>
			<button class="login" onclick="opendiscordchat()"><strong>Our Discord</strong></button>
			</strong>
		</div>

		<div class="animated fadeInDown" style="float: right; display: none; position:absolute; padding: 14px 16px;" id="discordchat">
			<iframe src="https://discordapp.com/widget?id=624653915169751060&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		</div>

		<div class="item-holder">
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Standard plan!</h1>
						<p>5GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						
					</div>
					<div style="margin-top: 60%;" class="price">
							<a href="#Standard">Order now<br> €4,99</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="recommended" style="background-color: lime; overflow: hidden; border-radius: 10px;"><h1>Recommended!!</h1></div>
					<div class="item-text-standard">
						<h1>Pro plan!</h1>
						<p>25GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						
					</div>

					<div style="margin-top: 32.5%;" class="price">
							<a href="#Pro">Order now<br> €7,99/month</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Master plan!</h1>
						<p>45GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						<p>Account recovery for free</p>
						
					</div>

					<div style="margin-top: 35%;" class="price">
							<a href="#Master">Order now<br> €11,99/month</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Ultimate plan!</h1>
						<p>65GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						<p>Account recovery for free</p>
						
					</div>
					<div style="margin-top: 35%;" class="price">
							<a href="#Ultimate">Order now<br> €16,99/month</a>
						</div>
				</div>
			</div>
	</div>
</body>
</html>