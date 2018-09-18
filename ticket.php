<!DOCTYPE html>
<html>
<?php 
		$conn = mysqli_connect('localhost', 'hnuthalapati1', 'hnuthalapati1','hnuthalapati1');
		$sql1="SELECT mname FROM ticket";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		$sql2="SELECT Date FROM ticket";
		$result2=mysqli_query($conn,$sql2);		
		$row2=mysqli_fetch_row($result2);
		$sql3="SELECT s1 FROM seats";
		$result3=mysqli_query($conn,$sql3);		
		$row3=mysqli_fetch_row($result3);
		$sql4="SELECT time FROM ticket";
		$result4=mysqli_query($conn,$sql4);		
		$row4=mysqli_fetch_row($result4);
		$sql5="SELECT seats FROM ticket";
		$result5=mysqli_query($conn,$sql5);		
		$row5=mysqli_fetch_row($result5);
		$sql6="SELECT Fare FROM ticket";
		$result6=mysqli_query($conn,$sql6);		
		$row6=mysqli_fetch_row($result6);
	?>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RB cinemas</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style>
		h1{
		   text-align:center;
		   font-size: 300%;
		   color:#D0D3D4;
		}
		h2,h3{
		   text-align:center;
		   font-size: 100%;
		   color:#D0D3D4;
		}
		
		p{
			 color :#F0F3F4 ;
		}
			table, th, td {
			border: 1px solid black;
			 
			}
			ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #111;
}
@media only screen and (max-width : 480px) {
			  /* Smartphone view: 1 tile */
			  .box {
				width: 100%;
				padding-bottom: 100%;
			  }
			}
			@media only screen and (max-width : 650px) and (min-width : 481px) {
			  /* Tablet view: 2 tiles */
			  .box {
				width: 50%;
				padding-bottom: 50%;
			  }
			}
			@media only screen and (max-width : 1050px) and (min-width : 651px) {
			  /* Small desktop / ipad view: 3 tiles */
			  .box {
				width: 33.3%;
				padding-bottom: 33.3%;
			  }
			}
			@media only screen and (max-width : 1290px) and (min-width : 1051px) {
			  /* Medium desktop: 4 tiles */
			  .box {
				width: 25%;
				padding-bottom: 25%;
			  }
			}</style>

	</head>
	<body class="touch" background="images/background.jpg" topmargin="0">
	<h1><img src = "images/logof.jpg" style="width:120px;height:120px;border:0;allign:left" >Cinemas </h1>
	
	<h2>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h2>
	<ul>
  <li><a href="home.php" class="active">Home</a></li>
 <li><a href="user_home.php">Buy Tickets</a></li>
 <li><a href="contact.php">Contact us</a></li>
 <li style="float:right"><a  href="logout.php">Logout</a></li>
</ul>
		
		<center>
		<table style="font-size:25px; background-color:#ffffff">
			<caption><h3>Ticket Summary</h3><caption>
			<tr>
				<th>Movie Name :</th>
				<td><?php echo $row1[0] ?></td>
			</tr>
			<tr>
				<th>Movie Date :</th>
				<td><?php echo $row2[0] ?></td>
			</tr>
			<tr>
				<th>Movie Time :</th>
				<td><?php echo $row4[0] ?></td>
			</tr>
			<tr>
				<th>Seat Numbers :</th>
				<td><?php echo $row3[0] ?></td>
			</tr>
			
			<tr>
				<th>Seats :</th>
				<td><?php echo $row5[0] ?></td>
			</tr>
		   <tr>
				<th>Total Fare :</th>
				<td> $<?php echo $row6[0] ?></td>
			</tr>
			
		</table>
		<p>
		<script type="text/javascript">
var id = Math.floor((Math.random()*1000) +1);
document.write("Confirmation code: #" +id);
</script>
</p>
		<div style="color:#F0F3F4 ;font-size:30px;">
		<footer><b>
		<p><br>Thank You for Booking Ticket at<br>RB Cinemas!</p></b>
		</footer>
		</div>
		</center>
	</body>
</html>