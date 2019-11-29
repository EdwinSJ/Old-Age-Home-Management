<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Find People</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">

	</head>

	<body>
	<div class="hright ">
		<h1>Enter constraints</h1>
			<form action = "includes/find.inc.php" method="POST">
				<input type="text" name="fname" placeholder="First name">
				<br>
				<input type="text" name="lname" placeholder="Last name">
				<br>
				<input type="text" name="gender" placeholder="Gender">
				<br>
				<input type="text" name="age" placeholder="Age">
				<br>
				<button type="submit" name="add-submit" class="obtn">Find People</button>
			</form>
	</div>
	</body>
</html>	