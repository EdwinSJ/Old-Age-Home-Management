<?php
	require 'includes/dbh.inc.php';
?>	

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Get Staff</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">

	</head>
	
	<body>


	<div class="hright2">
	<table class="tabel">
		<tr>
		<th>Staff No.</th>
		<th>First Name</th>
		<th>Last Name</th>

		<!--<th>Job Type</th>-->
		</tr>		
	<?php

		$sql = "select * from staff;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){


			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row['sno']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td>"/*.$row['uid']."</td><td>".$row['jobtype']."</td></tr>"*/;
			}
		echo "</table>";
		}
	?>

	</table>
	</div>
	</body>
</html>
