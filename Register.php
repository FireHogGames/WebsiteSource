<!DOCTYPE html>
<html>
<head>
	<title>NewWave Cloud</title>
	<link rel="stylesheet" type="text/css" href="./css/topnav.css">
	<link rel="stylesheet" type="text/css" href="./css/Animation.css">
	<link rel="stylesheet" type="text/css" href="./css/loader.css">
	<link rel="stylesheet" type="text/css" href="./css/register.css">

	<script src="./js/main.js"></script>
</head>
<body onload="myFunction()" style="margin: 0px; font-family: Arial; background-color: #1b4d83;">
	<h1 style="text-align: center; font-size: 90px; margin-top: 8%; color: white;" id="loaderTitle">NewWave cloud</h1>
	<div id="loader"></div>

	
	<div class="animated fadeInDown slower" style="display:none;" id="myDiv">
		<div style="text-align: center;" class="company">
			<strong><a href="index">NewWave Cloud</a></strong>
		</div>
		<div class="topnav">
			<strong>
			<a href="index">Home</a>
			<a href="plans">Plans</a>
			<a href="#contact">Contact</a>
			<a class="login" href="#panel">Panel</a>
			<a class="login" href="login">Account</a>
			<button class="login" onclick="opendiscordchat()"><strong>Our Discord</strong></button>
			</strong>
		</div>

		<div class="animated fadeInDown" style="float: right; display: none; position:absolute; padding: 14px 16px;" id="discordchat">
			<iframe src="https://discordapp.com/widget?id=624653915169751060&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		</div>

		<div class="MainBody">
			<h1 class="animated fadeInDown slower">Register</h1>
			<form action="Register.php" method="POST">
				<input class="animated fadeInDown slow" type="text" name="username" placeholder="Username..."><br />
				<input class="animated fadeInDown slow" type="password" name="password" placeholder="Password..."><br />
				<input class="animated fadeInDown slow" type="password" name="confPassword" placeholder="ConfirmPassword"><br />
				<input class="animated fadeInDown slow" type="submit" name="login" value="Log in">
				<p style="color: white;">Already have an account? <a href="login">Login here!</a></p>
			</form>
		</div>
	</div>
</body>
</html>