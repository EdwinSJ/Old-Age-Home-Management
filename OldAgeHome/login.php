<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style(1).css">
	<title>Login</title>
</head>
<body>
	
	<?php
		require "header contactsony.php";
	?>


	<main>
		<div class="box">
			<h1>Login</h1>
			<form action="includes/login.inc.php" method = "POST" > 
				<input type="text" name="uid" placeholder="Username">
				<br>
				<input type="password" name="pwd" placeholder="Password">
				<br>
				<a href="loggedin.php"><input type="submit" name="login-submit" class="lbtn" value="Login"></a>
			</form>	

			<a href="signup.php" id="join">Not a member? Join us Today!</a>
		<?php
			if(isset($_GET['login-submit'])){

			
			$webstatus = $_GET['error'];
			if($webstatus == "nouser")
			{
				echo "User does not exist";
			}
			elseif($webstatus == "wrongpass")
			{
				echo "Wrong password";
			}
			elseif($webstatus == "emptyfields")
			{
				echo "Please fill all fields";
			}}
		?>	
		</div>
	</main>

 <?php

	require "footer.php"

?>		

</body>
</html>
