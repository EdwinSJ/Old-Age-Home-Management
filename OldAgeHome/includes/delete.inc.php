<?php
	require 'dbh.inc.php';

?>	

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Delete</title>

	</head>
	
	<body>
		
	<?php

		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$count = 0;
		if(empty($fname) && empty($lname) && empty($gender) && empty($age)){
		header("Location: ../delete.php?error=emptyfields");
		
		}
		else $sql = "delete from resident";
		
		if(!empty($fname)){
			$sql .= " where fname ='$fname'";
			$count++;
		}
		
		if(!empty($lname) and $count == 0){
			$sql .= " where lname ='$lname'";
		}
		elseif (!empty($lname) and $count>0) {
			$sql .=" and lname = '$lname'";
		}

		if(!empty($gender) and $count == 0){
			$sql .= " where gender ='$gender'";
		}
		elseif (!empty($gender) and $count>0) {
			$sql .=" and gender = '$gender'";
		}

		if(!empty($age) and $count == 0){
			$sql .= " where age ='$age'";
		}
		elseif (!empty($age) and $count>0) {
			$sql .=" and age = '$age'";
		}


		$sql .= ";";
		$result = mysqli_query($conn,$sql);
		header("Location: ../loggedin.php?deletion=success");
/*		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){
		echo"<table>
			<tr>
			<th>Resident No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Age</th>
			</tr>";

			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row['rno']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['gender']."</td><td>".$row['age']."</td></tr>";
			}
		//echo "</table>";
		}
		else echo "Record does not exist";
		
		echo "</table>";
*/
	?>

	<!--</table>-->
	</body>
</html>