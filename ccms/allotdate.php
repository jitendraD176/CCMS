<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';
?>
 
<?php
 $head=$_POST['head'];
$ldate=$_POST['ldate'];
$ndate=$_POST['ndate'];
$ID=$_POST['CaseID'];
 
mysqli_query($connect,"UPDATE cases SET Head='$head' WHERE CaseID='$ID'");
mysqli_query($connect,"UPDATE cases SET LastDate='$ldate' WHERE CaseID='$ID'");
mysqli_query($connect,"UPDATE cases SET NextDate='$ndate' WHERE CaseID='$ID'");

header("Location: allcases.php");
?>
