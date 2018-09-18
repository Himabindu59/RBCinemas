<html>
<body>
<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'hnuthalapati1','hnuthalapati1','hnuthalapati1');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		
			$query = "INSERT INTO register VALUES ('$name','$username','$psw1','$psw2','$num','$gender')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:login.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
	?>
</body>
</html>