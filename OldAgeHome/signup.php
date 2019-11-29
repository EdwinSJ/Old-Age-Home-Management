<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">
	</head>
	
	<body>

	<?php
		require "header contactsony.php";
	?>


		<main>
			<div class="hright box2">
				<section>
					<h1>Signup</h1>
                    <form action = "includes/signup.inc.php" method="POST">
						<input type="text" name="fname" placeholder="First name">
						<br>
						<input type="text" name="lname" placeholder="Last name">
						<br>
						<input type="text" name="uid" placeholder="Username">
						<br>
						<br>
						<input type="text" name="jobtype" placeholder="Job Type">
						<br>
						<input type="password" name="pwd" placeholder="Password">
						<br>
						<input type="password" name="pwd-repeat" placeholder="Repeat password">
						<br>
						<button type="submit" name="signup-submit" class="lbtn">Signup</button>
					</form>
				</section>
			</div>
		</main>				
        <?php
			require "footer.php"
	    ?>
	</body>

</html