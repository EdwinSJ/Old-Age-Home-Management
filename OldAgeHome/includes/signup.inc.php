<?php
$count = 0;
if(isset($_POST['signup-submit'])){
	require 'dbh.inc.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwd1 = $_POST['pwd-repeat'];
	$jobtype = $_POST['jobtype'];


	if(empty($fname) || empty($lname) || empty($uid) || empty($pwd) || empty($pwd1) || empty($jobtype)){
		header("Location: ../signup.php?error=emptyfields&fname=".$fname."&lname=".$lname."&uid=".$uid."");
		exit();
	}
	elseif($pwd !== $pwd1){
		header("Location: ../signup.php?error=pwdcheck&fname=".$fname."&lname=".$lname."&uid=".$uid."");
		exit();
	}
	else{
		$sql = "SELECT uid FROM staff WHERE uid='$uid';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){
			header("Location: ../signup.php?error=usertaken&fname=".$fname."&lname=".$lname."");
			exit();
		}	

		else{

				$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
				
				$sql = "INSERT INTO staff(fname,lname,uid,pwd,jobtype) VALUES ('$fname','$lname','$uid','$hashedPwd','$jobtype');";

				$result = mysqli_query($conn,$sql);	

				header("Location: ../index.php?signup=success");
			}
		
	}
}