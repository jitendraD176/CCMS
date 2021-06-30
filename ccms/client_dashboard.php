<?php
session_start();

				if(isset($_SESSION["id"])) {
				}
     else {
	echo'<script  type="text/javascript">
alert("Login Again!!!");
window.location.replace("index.html");
</script>';
}

   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.top-nav{
			width: 100%;
			height: 60px;
			background-color: #666;
			color: #fff;
		}
		.top-nav span{
			margin: 20px;
		}
		.side-nav{
			background-color: #2c3136;
			color: #3e3f3a;
			height: 92.45vh;
			float: left;
		}
		.side-nav a{
			margin: 20px;
			color: #fff;
			font-size: 18px;
		}
		iframe{

			border:none;
			outline: none;
		}
	</style>
</head>
<body>
	<div class="top-nav">
		<span style="font-size: 25px;font-weight: bold;">Court Case Management System</span>
		<a href="clientlogout.php"><button class="btn btn-dark btn-large" style="float: right; margin:10px; ">Log Out</button></a>
	</div>
	<div class="col-md-2 side-nav">
		<p>M A I N</p>
		<a href="clientdashboardContent.php" target="data">Dashboard</a><br><br>
		<a href="clientdetails.php" target="data">My Profile</a><br><br>
		<a href="mycases.php" target="data">Case Details</a><br><br>
		<a href="#" target="data">Notifications</a><br><br>
		<a href="casefill.html" target="data">Add New Case</a><br><br>
		<a href="advocates.php" target="data">Advocates</a><br><br>
		<a href="#" target="data">Payment Details</a><br><br>
		<a href="clientlogout.php">Log Out</a><br><br>
	</div>

	<iframe class="data" name="data" width="83%" height="720" src="clientdashboardContent.php"></iframe>

</body>
</html>