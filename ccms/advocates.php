<!DOCTYPE html>
<html>
<head>
	<title>Complanits</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	
</head>
<body>

	<div class="container" style="margin-top: 20px; padding-right: 15%;">
		<h1>Advocates</h1><hr>
		<?php
$connect=mysqli_connect('localhost','root','','ccms');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 //echo 'connected sucessfully</br>';
?>
 
<?php
	$sql="SELECT * FROM advocates ";
$result=mysqli_query($connect,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        	<div class="jumbotron" style="padding-top: 40px;padding-bottom: 40px;">
			

			
			<div class="details col-md-8" style="display: block;">
				<div class="ratting" style="padding-bottom: 10px">
					<span style="width:37px;height:25px;background-color: green;color: #fff;padding: 0px 8px;border-radius: 5px;margin-right:10px;display:inline-block">'.$row["ID"].'</span>
				</div>
				
				<h3>' . $row["Name"]. '</h3> 
				<span>' . $row["Email"] .'</span><br>
				<span>' . $row["Contact"] .'</span><br><br>
				<span><strong>Age-</strong>' . $row["Age"] .'</span><br>
				<span><strong>Bar Registration No.- </strong>' . $row["BarRegNo"] .'</span><br>
				<span><strong>Enrolled District-</strong>' . $row["EnDistt"] .'</span><br>
				<span><strong>Enrolled State-</strong>' . $row["EnState"] .'</span><br>
				<span><strong>Address-</strong>' . $row["Address"] .'</span><br>
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
