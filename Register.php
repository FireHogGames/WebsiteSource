<!DOCTYPE html>
<html>
<head>
	<title>NewWave Cloud</title>
	<link rel="stylesheet" type="text/css" href="./css/topnav.css">
	<link rel="stylesheet" type="text/css" href="./css/Animation.css">
	<link rel="stylesheet" type="text/css" href="./css/loader.css">
	<link rel="stylesheet" type="text/css" href="./css/register.css">

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
			<a href="plans">Plans</a>
			<a class="login" href="#panel">Panel</a>
			<a class="login" href="register">Register</a>
			</strong>
		</div>

		<div class="MainBody">
			<h1 class="animated fadeInDown slower">Register</h1>
			<form action="Register.php" method="POST">
				<input class="animated fadeInDown slow" type="text" name="username" placeholder="Username..."><br />
				<input class="animated fadeInDown slow" type="password" name="password" placeholder="Password..."><br />
				<input class="animated fadeInDown slow" type="password" name="confPassword" placeholder="ConfirmPassword"><br />
				<input class="animated fadeInDown slow" type="submit" name="login" value="Log in">
			</form>
		</div>
	</div>
</body>
</html>