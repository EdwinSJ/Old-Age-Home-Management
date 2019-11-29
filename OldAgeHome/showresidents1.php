
<?php
	require 'includes/dbh.inc.php';
?>	

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Show Residents</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">
	</head>
	
	<body class="justforsrtest">


	<div class="hright2">
	<table class="tabel">
		<tr>
		<th>Resident No.</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Age</th>
		</tr>		
	<?php

		
		$sql = "select * from resident;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){


			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row['rno']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['gender']."</td><td>".$row['age']."</td></tr>";
			}
		echo "</table>";
		}
	?>

	</table>
	</div>
	</body>
</html>
