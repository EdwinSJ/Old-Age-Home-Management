<?php

if(isset($_POST['login-submit'])){

	require 'dbh.inc.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	if(empty($uid) || empty($pwd)){
		header("Location: ../login.php?error=emptyfields");
		exit();
	}
	else{
		$sql = "SELECT * FROM staff WHERE uid = '$uid';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($row = mysqli_fetch_assoc($result)){
			$pwdCheck = password_verify($pwd, $row['pwd']);
			if($pwdCheck == false){
				header("Location: ../login.php?error=wrongpass");
								exit();
			}
			elseif($pwdCheck == true){
			session_start();
			$_SESSION['userSno'] = $row['sno'];
			$_SESSION['userName'] = $row['uid'];
			$_SESSION['firstname'] = $row['fname'];
			$_SESSION['lastname'] = $row['lname'];
			$_SESSION['jobtype'] = $row['jobtype'];
			
			if($_SESSION['jobtype'] == "Admin"){
			header("Location: /loginsystem/loggedin.php");
			}
			else{
			header("Location: /loginsystem/loggedinstaff.php");
			}
			exit();

			}
		}
		else{
			header("Location: ../login.php?error=nouser");
			exit();
			}
		}

}
else{
	header("Location: ../login.php");
	exit();
}


