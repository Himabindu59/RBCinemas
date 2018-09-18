<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RB cinemas</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style type="text/css">
		body{
			color:white;
		}
		h1{
		   text-align:center;
		   font-size: 300%;
		}
		</style>
	<body class="touch" background="images/background.jpg" topmargin="0">
	<h1><img src = "images/logof.jpg" style="width:120px;height:120px;border:0;allign:left" >Cinemas </h1>
	
		<center>
		<font size=10>
		<form method="POST" action="checkuser.php" name="f1">
		<fieldset style="width:270px">
		
		<legend>
		<div style="color:#D0D3D4">
		
		<h2>Login</h2>
		</div>
		</legend>
		<table>
  			<tr>
			<td>Username</td>
  			<td><input type="text" name="email" value=<?php if (isset($_COOKIE["Email"])) echo $_COOKIE["Email"] ?> ></td>
			</tr>
			<tr>
  			<td>Password:</td>
  			<td><input type="password" name="psw" value=<?php if (isset($_COOKIE["Password"])) echo $_COOKIE["Password"] ?> ></td>
			</tr>
			<tr>
			<td> <td>
			</tr>
			<tr>
  			<td></td>
			<td align="center"><input type="submit" name="login" value=Login> &nbsp &nbsp &nbsp &nbsp<input type="reset"></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			</tr>
			<td colspan =4 align="center"> If not Registered? <a href="register.html">Click Here</a></td>
			</tr>
		</table>
		</fieldset>
		</form>
		</font>
		</center>
		<footer>
  			<p color= "#D0D3D4">Created by:#RB</p>
  			
		</footer>
	</body>
</html>