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
		h2{
		   text-align:center;
		   font-size: 200%;
		   color:#D0D3D4;
		}
		p{
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
    background-color:#111 ;
}
		</style>
		</head>
		
<body class="touch" background="images/background.jpg" topmargin="0">
	<h1><img src = "images/logof.jpg" style="width:120px;height:120px;border:0;allign:left" >Cinemas </h1>
	
<?php 
	session_start();
	echo "<p> User: " . $_SESSION["user"] . "</p>"; 
	?> 
<ul>
  <li><a href="home.php" class="active">Home</a></li>
  <li><a href="user_home.php">Buy Tickets</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a  href="logout.php">Logout</a></li>
</ul> 
<h2> Krishnarjuna Yuddham</h2>
<img src="images/kay.jpg" width = "240" height="275"alt="KAY" align="right">
<p><font size="4"> Two playboys who hail from different locales come face-to-face and are shocked to discover that they are look-a-likes.<br>
Theatrical trailer: </font><br>
<video width="500" controls>
  <source src="media/krishnarjuna.mp4" type="video/mp4">
       </video>
</p>
<footer>
  			<p ><font size="3">Created by:#RB</font></p>
  			
		</footer>


</body>
</html>
		