<html>
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
		h2{
		   text-align:center;
		   font-size: 200%;
		   color:#D0D3D4;
		}
		p{
			 color :#F0F3F4 ;
		}
		td{
			 color :#F0F3F4 ;
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
			}
		</style>
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
	<font size=10>
		<form method="POST" action="saveticket.php" name="form1">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#F0F3F4">
		<h3>Ticket Selection</h3>
		</div>
		</legend>
		<table>
			<tr>
			<td>Select Date:</td>
			<td><input type="date" name="tdate"></td>
			</tr><tr>
			
			<tr>
			<td>Time</td>
			<td><select name="time">
            <option value="8:45 AM">8:45 AM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            </select></td>
			</tr>
			<tr>
			<td>Number of Seats</td>
			<td><select name="seats">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
			<option value="4">4</option>
            <option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select></td>
			</tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr>
			<td></td>
			<td><input type="submit" value="Select Seats"></td>
			</tr>
		</table>
		</fieldset>
		</form>
		
	</center>
	</font>
	<footer>
  		<p>Created by:#RB</p>
  			
	</footer>
	</body>

</html>