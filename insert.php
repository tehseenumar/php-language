
<?php

	include("connection.php");
	error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert.php</title>
</head>
<body>

	<form action="" method="POST">

		Roll.No : <input type="text" name="rollno" value=""><br><br>
		Name : <input type="text" name="studentname" value=""><br><br>
		Class : <input type="text" name="class" value=""><br><br>
		<input type="submit" name="submit" value="Submit">
		
	</form>

</body>
</html>

<?php

	if($_POST['submit']){

		$rn = $_POST['rollno'];
		$sn = $_POST['studentname'];
		$cl = $_POST['class'];
		if($rn!= "" && $sn!= "" && $cl!= ""){
				$query = "INSERT INTO student (rollno, name, class) VALUES('$rn','$sn','$cl')";
				$data = mysqli_query($conn, $query);

				if($data){
					echo "Data Insert into Database Successfully. <a href='display.php'>Check Updated List Here</a>";
				}else{
					echo "Already Data Insert Database";
				}

		}else{
			echo "All Fields are Required.";
		}
	}

?>