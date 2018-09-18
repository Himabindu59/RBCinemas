<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RB CINEMAS</title>
		
		<style type="text/css">
		
		h1{
		   text-align:center;
		   font-size: 300%;
		   color:#D0D3D4;
		}
		h3{
			color:#D0D3D4;
		}
		p{
			 color :#F0F3F4 ;
			  
		    text-align:center;
		}
		th,td{
		color:#D0D3D4;	
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
</style>
</head>


<body class="touch" background="images/background.jpg" topmargin="0">
	<h1><img src = "images/logof.jpg" style="width:120px;height:120px;border:0;allign:left" >Cinemas </h1>
	
<?php 
	session_start();
	echo "<p> Hi " . $_SESSION["user"] . "</p>"; 
	?> 
<ul>
  <li><a href="home.php" class="active">Home</a></li>
 <li><a href="user_home.php">Buy Tickets</a></li>
 <li><a href="contact.php">Contact us</a></li>
 <li style="float:right"><a  href="logout.php">Logout</a></li>
</ul>
<h3>Movies offered: </h3>
<table>
	<tr>
		<th> Hollywood </th>
		<th> Bollywood </th>
		<th> Tollywood </th>
	</tr>
	
	<tr>
		<td><button type="button"> <a href="avengers.php">Avengers Infinity War</a></button></td>
		<td><button type="button"> <a href="baaghi.php">Baaghi2</a></button></td>
		<td><button type="button" > <a href="chal.php">Chal Mohan Ranga</a></button></td>
	</tr>
	
	<tr>
		<td><button type="button"> <a href="quiet.php">A Quiet Place</a></button></td>
		<td><button type="button"> <a href="october.php">October</a></button></td>
		<td><button type="button"><a href="bharath.php">Bharath Ane Nenu</a></button></td>
	</tr>
	<tr>
		<td><button type="button"> <a href="blockers.php">Blockers</a></button></td>
		<td><button type="button" > <a href="raazi.php">Raazi</a></button></td>
		<td><button type="button" > <a href="krishna.php">Krishnarjuna Yuddam</a></button></td>
	</tr>
	<tr>
		<td><button type="button" > <a href="rampage.php">Rampage</a></button><br></td>
		<td> Coming Soon </td>
		<td> Coming Soon </td>
	</tr>
</table>




		
<br>
<br>
<br>

<footer>
  		<p>Created by:#RB</p>
  			
	</footer>



</body>
</html>

