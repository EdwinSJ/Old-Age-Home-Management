<?php

if(isset($_POST['add-submit'])){
	require 'dbh.inc.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$sno = $_POST['sno'];


	
	if(empty($fname) || empty($lname) || empty($gender) || empty($age)){
		header("Location: ../addresident.php?error=emptyfields&fname=".$fname."&lname=".$lname."&uid=".$uid."");
		exit();
	}

	else{
			
			$sql = "INSERT INTO resident(fname,lname,gender,age,staffno) VALUES ('$fname','$lname','$gender','$age','$sno');";

			$result = mysqli_query($conn,$sql);	

			header("Location: /loginsystem/loggedin.php");
			}
		
}