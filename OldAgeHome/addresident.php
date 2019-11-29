<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Add New Residents</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">

	</head>
	
	<body>
		<main>
			<div class="hright">
				<section>
					<h1>Add New Residents</h1>

					<form action = "includes/addresident.inc.php" method="POST">
						<input type="text" name="fname" placeholder="First name">
						<br>
						<input type="text" name="lname" placeholder="Last name">
						<br>
						<select name="gender" class="obtn">
							<option>Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>	
						<br>
						<input type="text" name="age" placeholder="Age">
						<br>
						<br>
						<input type="text" name="sno" placeholder="Staff Number">
						<br>
						<button type="submit" name="add-submit" class="obtn">Add Resident</button>
					</form>
				</section>
			</div>
		</main>				

	</body>

</html>	