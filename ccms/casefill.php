
<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';
?>
 
<?php
session_start();
if(isset($_SESSION["id"])) {
				$email=$_SESSION["id"];}
 
// create a variable
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$add=$_POST['add'];
$city=$_POST['city'];
$zcode=$_POST['zcode'];
$fir=$_POST['fir'];
$incident=$_POST['incident'];
$a=$_POST['date'];
$b=$_POST['time'];
$c=$_POST['dater'];
$d=$_POST['location'];
$e=$_POST['discription'];
$f=$email;


 
//Execute the query

//$sql="SELECT * FROM std_data WHERE Email='$email' AND Roll_no='$rollno'";
//$result=mysqli_query($connect,$sql);

//if(mysqli_num_rows($result)==0){
 
mysqli_query($connect,"INSERT INTO cases (Name,Age,Gender,Fname,Mname,Address,City,ZipCode,FIRno,Incident,IDate,ITime,RDate,Location,Discription,Reporter)
		        VALUES ('$name','$age','$gender','$fname','$mname','$add','$city','$zcode','$fir','$incident','$a','$b','$c','$d','$e','$f')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>registered successfully.</p>";
	header("Location: mycases.php");
} else {
	echo "Error!<br />";
	echo "Try again later.";
	echo mysqli_error ($connect);
}
/*
else{
	echo "already registered!!!";
	echo'<script  type="text/javascript">
alert("already registered!!!");
window.location.replace("./nr.html");
</script>';
}*/
?>