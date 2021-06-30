<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<style type="text/css">
		.top{
			height: 45px;
			width: 100%;
			background-color: #465EC0;
			margin: 0px 0px 20px 0px;
		}
		#d1{background-color: darkkhaki;
			color: black;
			text-align: center;
			font-size: 25px; 
			margin-right: 30%;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container-fluid">
		<h2>My Profile</h2><hr>
		
		<div class="detail" style="border: 1.5px solid #999;border-radius:5px;padding: 0px;">
			<div class="top"></div>
			<p id="d1">PERSONAL INFORMATION</p>

			<?php
				$connect=mysqli_connect('localhost','root','','ccms');
				 
				if(mysqli_connect_errno($connect))
				{
						echo 'Failed to connect';
				}
				 //echo 'connected sucessfully</br>';
		    	?>
				<?php
				if(isset($_SESSION["id"])) {
				$email=$_SESSION["id"];
					$sql="SELECT * FROM client WHERE Email='$email'";
				$result=mysqli_query($connect,$sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '
		<form style="padding: 20px;" action="clientprofileupdate.php" method="POST">
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
		    <div class="col-sm-7">
		      <input type="email" readonly class="form-control" name="email" id="staticEmail" value="' . $row["Email"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="pass" class="col-sm-1 col-form-label">Password</label>
		    <div class="col-sm-7">
		      <input type="text" readonly class="form-control" name="password" id="pass" value="' . $row["Password"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="name" class="col-sm-1 col-form-label">Name:</label>
		    <div class="col-sm-7">
		      <input type="text" readonly class="form-control" id="name" name="name" value="' . $row["FName"]. ' '.$row["LName"].'">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="dob" class="col-sm-1 col-form-label">DoB:</label>
		    <div class="col-sm-7">
		      <input type="date" readonly class="form-control" id="dob" name="dob" value="' . $row["DoB"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="gender" class="col-sm-1 col-form-label">Gender:</label>
		    <div class="col-sm-7">
		      <input type="text" readonly class="form-control" id="gender" name="gender" value="' . $row["Gender"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="occu" class="col-sm-1 col-form-label">Occupation:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="occu" name="occupation" value="' . $row["Occupation"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="course" class="col-sm-1 col-form-label">Aadhaar No.:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="course" name="aadhaar" value="' . $row["AadhaarNo"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="year" class="col-sm-1 col-form-label">Phone:</label>
		    <div class="col-sm-7">
		      <input type="tel" class="form-control" id="year" name="phone" value="' . $row["Contact"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="address" class="col-sm-1 col-form-label">Address:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="address" name="address" value="' . $row["Address"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="city" class="col-sm-1 col-form-label">City:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="city" name="city" value="' . $row["City"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="state" class="col-sm-1 col-form-label">State:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="state" name="state" value="' . $row["State"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="pin" class="col-sm-1 col-form-label">Pin Code:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="pin" name="pincode" value="' . $row["Pincode"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="nationality" class="col-sm-1 col-form-label">Nationality:</label>
		    <div class="col-sm-7">
		      <input type="text" class="form-control" id="nationality" name="nationality" value="' . $row["Nationality"]. '">
		    </div>
		  </div>

		  <input type="submit" class="btn btn-dark btn-large" style="margin-left: 28%;" name="submit" value="Update Profile">
		</form>';
	}}}
	?>
	</div>
	</div>

</body>
</html>