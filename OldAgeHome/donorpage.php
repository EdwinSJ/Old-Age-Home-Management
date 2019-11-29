<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Donate</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">

	</head>
	
	<body>

	<?php
		require "header contactsony.php";
	?>


		<main>
			<div class="hright">
				<section>
					<h1>Donate</h1>
					<form action = "includes/donate.inc.php" method="POST">
						<input type="text" name="fname" placeholder="First name">
						<br>
						<input type="text" name="lname" placeholder="Last name">
						<br>'
						<select class="lbtn" name="donation_type">
							<option>Select the type of donation</option>
							<option>Charitable Funds</option>
							<option>Clothing</option>
							<option>Food</option>
						</select>	
						<br>
						<input type="text" name="donation_qty" placeholder="Donation Quantity">
						<br>
						<input type="text" name="contact" placeholder="Phone Number">
						<br>
						<input type="text" name="address" placeholder="Address">
						<br>
						<input type="text" name="staff" placeholder="StaffNumber">
						<br>
						<button type="submit" name="donate-submit" class="lbtn">Donate</button>
					</form>
				</section>
			</div>
		</main>	
		<?php
			 require "getstaff.php";
			 require "footer.php";
	    ?>			

	</body>

</html>			