<html>
<body>
<?php 

		extract($_POST);
		$mysqli = new mysqli('localhost', 'hnuthalapati1','hnuthalapati1','hnuthalapati1');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		$conn = mysqli_connect('localhost', 'hnuthalapati1', 'hnuthalapati1','hnuthalapati1');
		$sql="SELECT seats FROM ticket";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		
		if($row[0] != count($mseats)){
			//echo  $row[0] . " " . count($mseats);
			echo "<script type='text/javascript'>alert('Please select the right number of seats.');</script>";
			header("location:select.php");
			
		} else {
			foreach($mseats as $selected)
				$seat.=$selected." ";
	
			$mysqli->query("DELETE FROM seats");
			$query = "INSERT INTO seats VALUES ('$seat')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:checkout.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
		}	?>
	</body>
	</html>