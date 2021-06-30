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

				if(isset($_SESSION["id1"])) {
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$id=$_POST['advocateID'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$address=$_POST['address'];
 
 
mysqli_query($connect,"UPDATE admin SET Email='$email' WHERE Email='$email'");
mysqli_query($connect,"UPDATE admin SET Password='$password' WHERE Email='$email'");
mysqli_query($connect,"UPDATE admin SET Name='$name' WHERE Email='$email'");
//
mysqli_query($connect,"UPDATE admin SET Age='$age' WHERE Email='$email'");
mysqli_query($connect,"UPDATE admin SET AdvocateID='$id' WHERE Email='$email'");
mysqli_query($connect,"UPDATE admin SET Contact='$phone' WHERE Email='$email'");
mysqli_query($connect,"UPDATE admin SET Address='$address' WHERE Email='$email'");


echo'<script  type="text/javascript">
alert("profile updated successfully");
window.location.replace("adminprofile.php");
</script>';
}
else {
	echo'<script  type="text/javascript">
alert("Login Again!!!");
window.location.replace("index.html");
</script>';
}
?>
