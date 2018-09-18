
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
<form action="mailto:RB_527@gmail.com" method="post" enctype="text/plain">
  <h2 class="text-center">CONTACT US!</h2>
  <div class="row">
    <div class="col-sm-5">
	<br>
	<br>
      <p>Contact us and we'll try to get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Atlanta, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01 012-345-6789</p>
      <p><span class="glyphicon glyphicon-envelope"></span> RB_527@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
        <p>Name:<input type="text" name="name"></p>
        <p>  E-mail:
<input type="text" name="mail"></p>
      <p>Comment:
<input type="text" name="comment" size="50"></p>
        <p><button class="btn btn-default pull-right"  type="submit" value="Send" onclick="alert('Thank you for contacting us, we will get back to you as soon as possible')">Send</button>
<button class="btn btn-default pull-right"  type="reset" value="Reset">Reset</button></p>
</form>
</body>
</html>