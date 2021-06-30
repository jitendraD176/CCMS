

<?php
session_start();
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully<br>';

 
// create a variable
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM client WHERE Email='$email' AND Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION["id"] = $email;
	echo"login successfully";
	if(isset($_SESSION["id"])) {
		echo $_SESSION["id"];
	header("Location: client_dashboard.php");
}
	

}
else {
	echo'<script  type="text/javascript">
alert("incorrect username or password!!! ");
window.location.replace("./index.html");
</script>';
}
?>

