<?php
session_start();
?>
<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';

				if(isset($_SESSION["id"])) {
					$Email=$_POST['email'];
$occupation=$_POST['occupation'];
$aadhaar=$_POST['aadhaar'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$nationality=$_POST['nationality'];
 

mysqli_query($connect,"UPDATE client SET Occupation='$occupation' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET AadhaarNo='$aadhaar' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET Contact='$phone' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET Address='$address' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET City='$city' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET State='$state' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET Pincode='$pincode' WHERE Email='$Email'");
mysqli_query($connect,"UPDATE client SET Nationality='$nationality' WHERE Email='$Email'");


echo'<script  type="text/javascript">
alert("profile updated successfully");
window.location.replace("clientdetails.php");
</script>';
}
else {
	echo'<script  type="text/javascript">
alert("Login Again!!!");
window.location.replace("index.html");
</script>';
}
?>
