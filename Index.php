<!DOCTYPE html>
<html>
<head>
	<title>NewWave Cloud</title>
	<link rel="stylesheet" type="text/css" href="./css/topnav.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="./css/Animation.css">
	<link rel="stylesheet" type="text/css" href="./css/loader.css">

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
<body onload="myFunction()" style="margin: 0px; font-family: Arial;">
	<h1 style="text-align: center; font-size: 90px; margin-top: 8%; color: white;" id="loaderTitle">NewWave cloud</h1>
	<div id="loader"></div>

	
	<div class="animated fadeInDown slower" style="display:none;" id="myDiv">
		<div class="company">
		<strong><a href="index">NewWave Cloud</a></strong>
		</div>
		<div class="topnav">
			<strong>
			<a class="active" href="index">Home</a>
			<a href="plans">Plans</a>
			<a class="login" class="login" href="#panel">Panel</a>
			<a  class="login" href="register">Register</a>
			</strong>
		</div>
	
			<div class="MainBody">
				<div class="toparea">
					<div class="title">
						<h1 class="animated fadeInDown slower">Your data in a safe place!!</h1>
						<h2 class="animated fadeInDown slow">Fast and secure cloud services!</h2>
						<a  href="plans">Choose plan</a>
					</div>
				</div>
		</div>
	</div>
</body>
</html>