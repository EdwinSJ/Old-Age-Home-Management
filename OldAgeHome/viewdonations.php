<?php
	require 'includes/dbh.inc.php';
?>	

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>View Donations</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">
	</head>
	
	<body>
	<div class="box">
	<table id="zee">
	
		<tr>
		<th>Donor No.</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Donation Type</th>
		<th>Donation Quantity</th>
		<th>Contact No.</th>
		<th>Address</th>
		</tr>		
	
	<?php

		$sql = "select * from donor;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){


			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row['dno']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['donation_type']."</td><td>".$row['donation_qty']."</td><td>".$row['contact']."</td><td>".$row['address']."</td></tr>";
			}
		echo "</table>";
		}
	?>

	</table>
	</div>
	</body>
</html>