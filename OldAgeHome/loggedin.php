<?php

session_start()

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Logged In</title>
		<link rel="stylesheet" type="text/css" href="css/style(1).css">
	</head>
	
	<body>

	<?php
		require "headerlogged.php";

	?>

	<div class="snavs">
	
	<div class="weltext">
	<?php	
		echo "Weclome " .$_SESSION['firstname']." ".$_SESSION['lastname'];
	?>
	</div>
	<br>

	<form method="GET">
	<button type="submit" name="addres" value="show">Add Residents</button>
	<button type="submit" name="getstaff" value="show">Get Staff</button>
	<button type="submit" name="findp" value="show">Find People</button>
	<button type="submit" name="viewd" value="show">View Donations</button>
	<button type="submit" name="showres" value="show">Show Enrolled Residents</button>
	<button type="submit" name="delres" value="show">Delete Residents</button>
	</form>			
	</div>


<?php
			$option = 0;
			if(isset($_GET['showres'])){
			$option = 1;
			if($option == 1)
			{
				include_once 'showresidents1.php';
				
			}}

			if(isset($_GET['addres'])){
				$option = 2;
				if($option == 2)
				{
					include_once 'addresident.php';
				}}

			if(isset($_GET['findp'])){
				$option = 3;
				if($option == 3)
				{
					include_once 'find.php';
				}}

			if(isset($_GET['viewd'])){
				$option = 4;
				if($option == 4)
				{
					include_once 'viewdonations.php';
				}}
			
			if(isset($_GET['getstaff'])){
				$option = 5;
				if($option == 5)
				{
					include_once 'getstaff.php';
				}}

			if(isset($_GET['delres'])){
				$option = 6;
				if($option == 6)
				{
					include_once 'delete.php';
				}}
	
?>				