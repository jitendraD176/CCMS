<!DOCTYPE html>
<html>
<head>
	<title>Complanits</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.hos{
			height: 310px;
			width: 180px;
			border:1px #999 solid;
			margin-right: 10px;
			padding: 5px;
		}
	</style>
</head>
<body>

	<div class="container" style="margin-top: 20px; padding-right: 15%;">
		<h1>All Cases</h1><hr>
		<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 //echo 'connected sucessfully</br>';
?>
 
<?php
	$sql="SELECT * FROM cases ";
$result=mysqli_query($connect,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        	<div class="jumbotron" style="padding-top: 40px;padding-bottom: 40px;">
			<div style="float: right;">
				  
				  <div class="hos">
				  <form action="allotdate.php" method="post">
				  <div class="form-group">
				    <label for="Head">Head</label>
				    <input type="text" class="form-control" id="Head" name="head" value="'.$row["Head"].'">
				  </div>
				  <div class="form-group">
				    <label for="room">Last Date</label>
				    <input type="date" class="form-control" id="room" name="ldate" value="'.$row["LastDate"].'">
				  </div>
				  <div class="form-group">
				    <label for="fee">Next Date</label>
				    <input type="date" class="form-control" id="fee" name="ndate" value="'.$row["NextDate"].'">
				  </div>
				  <input type="text" name="CaseID" style="display:none;" value="'.$row["CaseID"].'">
				  <button type="submit" style="margin-left: 30%;" class="btn btn-primary" >Allot</button>
				</form>
				</div>
				</div>

			
			<div class="details col-md-8" style="display: block;">
				<div class="ratting" style="padding-bottom: 10px">
					<span style="width:37px;height:25px;background-color: green;color: #fff;padding: 0px 8px;border-radius: 5px;margin-right:10px;display:inline-block">'.$row["CaseID"].'</span>
				</div>
				
				<h3>' . $row["CaseType"]. '</h3> 
				<span><strong>FIR No.-</strong>' . $row["FIRno"] .'</span><br>
				<span><strong>AdvocateID-</strong>' . $row["AdvocateID"] .'</span><br><br>
				<span><strong>Name-</strong>' . $row["Name"] .'</span><br>
				<span><strong>Age- </strong>' . $row["Age"] .'</span>,
				<span><strong>Gender-</strong>' . $row["Gender"] .'</span><br>
				<span><strong>Father Name-</strong>' . $row["Fname"] .'</span><br>
				<span><strong>Mother Name-</strong>' . $row["Mname"] .'</span><br>
				<span><strong>Address-</strong>' . $row["Address"] .'</span><br>
				<span><strong>City- </strong>' . $row["City"] .'</span>,
				<span><strong>Pin Code-</strong>' . $row["ZipCode"] .'</span><br>
				<span><strong>Incident Date-</strong>' . $row["IDate"] .'</span>,
				<span><strong>Time- </strong>' . $row["ITime"] .'</span><br>
				<span><strong>Incident- </strong>' . $row["Incident"] .'</span><br>
				<span><strong>Location-</strong>' . $row["Location"] .'</span><br>
				<span><strong>Reporting Date- </strong>' . $row["RDate"] .'</span><br>
				<span><strong>Complete Discription-</strong>' . $row["Discription"] .'</span><br><hr>
				<span><strong>Reporter- </strong>' . $row["Reporter"] .'</span><br>
			</div>
		</div>
        ';

    }
} else {
    echo "0 results";
}

$connect->close();
?>
		
	</div>			
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

</body>
</html>
