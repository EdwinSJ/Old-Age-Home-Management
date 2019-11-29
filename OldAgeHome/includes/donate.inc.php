<?php

if(isset($_POST['donate-submit'])){
	require 'dbh.inc.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$donation_type = $_POST['donation_type'];
	$donation_qty = $_POST['donation_qty'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$staffno = $_POST['staff'];
	


	if(empty($fname) || empty($lname) || empty($donation_type) || empty($donation_qty || empty($staffno))){
		header("Location: ../donorpage.php?error=emptyfields&fname=".$fname."&lname=".$lname."&uid=".$uid."");
		exit();
	}

	else{
			
			$sql = "INSERT INTO donor(fname,lname,donation_type,donation_qty,contact,address,sno) VALUES ('$fname','$lname','$donation_type','$donation_qty','$contact','$address','$staffno');";

			$result = mysqli_query($conn,$sql);	

			header("Location: ../index.php?donation=success");
			}
		
}
