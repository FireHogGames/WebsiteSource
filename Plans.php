<!DOCTYPE html>
<html>
<head>
	<title>NewWave Cloud</title>
	<link rel="stylesheet" type="text/css" href="./css/topnav.css">
	<link rel="stylesheet" type="text/css" href="./css/Animation.css">
	<link rel="stylesheet" type="text/css" href="./css/loader.css">
	<link rel="stylesheet" type="text/css" href="./css/plans.css">

	<script>
		var myVar;
		
		function myFunction() {
		  myVar = setTimeout(showPage, 500);
		}
		
		function showPage() {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		  document.getElementById("loaderTitle").style.display = "none";
		}
	</script>
</head>
<body onload="myFunction()" style="margin: 0px; font-family: Arial; background-color: #1b4d83;">
	<h1 style="text-align: center; font-size: 90px; margin-top: 8%; color: white;" id="loaderTitle">NewWave cloud</h1>
	<div id="loader"></div>

	
	<div class="animated fadeInDown slower" style="display:none;" id="myDiv">
		<div class="company">
			<strong><a href="index">NewWave Cloud</a></strong>
		</div>
		<div class="topnav">
			<strong>
			<a href="index">Home</a>
			<a class="active" href="plans">Plans</a>
			<a  class="login" href="#panel">Panel</a>
			<a  class="login" href="register">Register</a>
			</strong>
		</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Standard plan!</h1>
						<p>5GB SSD storage!</p>
						<p>Access files everywhere!</p>
						
					</div>
					<div style="margin-top: 85%;" class="price">
							<a href="#Standard">Order now<br> FREE</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Pro plan!</h1>
						<p>25GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						
					</div>

					<div style="margin-top: 60%;" class="price">
							<a href="#Pro">Order now<br> €5,99/month</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Master plan!</h1>
						<p>45GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						<p>File recovery for free</p>
						
					</div>

					<div style="margin-top: 35%;" class="price">
							<a href="#Master">Order now<br> €9,99/month</a>
						</div>
				</div>
				<div class="item-standard">
					<div class="item-text-standard">
						<h1>Ultimate plan!</h1>
						<p>65GB SSD storage!</p>
						<p>Access files everywhere!</p>
						<p>24/7 customer service for free!</p>
						<p>File recovery for free</p>
						
					</div>
					<div style="margin-top: 35%;" class="price">
							<a href="#Ultimate">Order now<br> €14,99/month</a>
						</div>
				</div>
	</div>
</body>
</html>