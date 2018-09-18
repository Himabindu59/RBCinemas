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
		body {
			  margin: 0;
			  padding: 0;
			 
			  font: 15px/23px 'Lucida Sans',sans-serif;
			}
			.wrap {
			  overflow: hidden;
			  margin: 10px;
			}
			.box {
			  float: left;
			  position: relative;
			  width: 20%;
			  padding-bottom: 20%;
			}
			.boxInner {
			  position: absolute;
			  left: 10px;
			  right: 10px;
			  top: 10px;
			  bottom: 10px;
			  overflow: hidden;
			}
			.boxInner img {
			  width: 100%;
			}
			.boxInner .titleBox {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  margin-bottom: -50px;
			  background: #000;
			  background: rgba(0, 0, 0, 0.5);
			  color: #FFF;
			  padding: 10px;
			  text-align: center;
			  -webkit-transition: all 0.3s ease-out;
			  -moz-transition: all 0.3s ease-out;
			  -o-transition: all 0.3s ease-out;
			  transition: all 0.3s ease-out;
			}
			body.touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
			  margin-bottom: 0;
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
	
	<ul>
  <li><a href="home.php" class="active">Home</a></li>
 <li><a href="user_home.php">Buy Tickets</a></li>
 <li><a href="contact.php">Contact us</a></li>
 <li style="float:right"><a  href="logout.php">Logout</a></li>
</ul>
	<form action = "savemovie.php" method = "POST">
	  <div class="wrap">
		<h2>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h2>
	
		<!-- Define all of the tiles: -->
		<div class="box">
		  <div class="boxInner">
			<center>
				<input type="image" src="images/avengers.jpg" width = "240" height="275" alt="Avengers Infinity War" name="name" value="AVENGERS INFINITY WAR">
			</center>
			<div class="titleBox">Avengers Infinity War</div>
		  </div>
		</div>
		
		<div class="box">
		  <div class="boxInner">
			<center>
				<input type="image" src="images/bharathane.jpg" alt="Bharath Ane Nenu" name="name" value="BHARATH ANE NENU">
			</center>
			<div class="titleBox">Bharath Ane Nenu</div>
		  </div>
		</div>
		
		<div class="box">
		  <div class="boxInner">
			<center>
				<input type="image" src="images/q1.png" alt="A quiet place" name="name" value="A QUIET PLACE">
			</center>
			<div class="titleBox">A quiet place</div>
		  </div>
		</div>
		
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/blockers.jpg" alt="Blockers" name="name" value="BLOCKERS">
		  </center>
			<div class="titleBox">Blockers</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/baaghi2.jpg" alt="Baaghi2" name="name" value="BAAGHI2">
		  </center>
			<div class="titleBox">Baaghi2</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/chal.jpg" width = "240" height="275"alt="Chal MohanRanga" name="name" value="CHAL MOHANRANGA">
		  </center>
			<div class="titleBox">Chal MohanRanga</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/kay.jpg" width = "240" height="275" alt="Krishnarjuna Yuddham" name="name" value="KRISHNARJUNA YUDDHAM">
		  </center>
			<div class="titleBox">Krishnarjuna Yuddham</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/october.jpeg"width = "240" height="275" alt="October" name="name" value="OCTOBER">
		  </center>
			<div class="titleBox">October</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/raazi.jpg" alt="Raazi" width = "240" height="275" name="name" value="RAAZI">
		  </center>
			<div class="titleBox">Raazi</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="images/rampage.jpg"  width = "240" height="275" alt="Rampage" name="name" value="RAMPAGE">
		  </center>
			<div class="titleBox">Rampage</div>
		  </div>
		</div>
		
	  </div>
	  </form>
	  <footer>
  			<p><font size="3">Created by:#RB</font></p>
  			
		</footer>
	</body>
</html>