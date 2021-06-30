
<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';
?>
 
<?php
 
// create a variable
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['bday'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$a=$_POST['password'];

 
//Execute the query

$sql="SELECT * FROM client WHERE Email='$email'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)==0){
 
mysqli_query($connect,"INSERT INTO client (FName,LName,DoB,Gender,Email,Password)
		        VALUES ('$fname','$lname','$dob','$gender','$email','$a')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>registered successfully.</p>";
	header("Location: index.html");
} else {
	echo "Error!<br />";
	echo "Try again later.";
	echo mysqli_error ($connect);
}}
else{
	echo "already registered!!!";
	echo'<script  type="text/javascript">
alert("already registered!!!");
window.location.replace("./signup.html");
</script>';
}
?>