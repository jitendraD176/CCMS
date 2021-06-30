

<?php
session_start();
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully<br>';
?>
 
<?php
 
// create a variable
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION["id1"] = $email;
	if(isset($_SESSION["id1"])) {
		echo $_SESSION["id1"];
	echo"login successfully";
	header("Location: admin_dashboard.php");
}
}
else{
	$sql="SELECT * FROM advocates WHERE Email='$email' AND Password='$password'";
	$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION["id2"] = $email;
	if(isset($_SESSION["id2"])) {
		echo $_SESSION["id2"];
	echo"login successfully";
	header("Location: advocatedashboard.php");
}

}
else {
	echo'<script  type="text/javascript">
alert("incorrect username or password!!! ");
window.location.replace("adminlogin.html");
</script>';
}
}

?>

