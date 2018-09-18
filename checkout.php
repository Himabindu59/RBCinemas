  <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            <body class="touch" background="images/background.jpg" topmargin="0">
	<h1><img src = "images/logof.jpg" style="width:120px;height:120px;border:0;allign:left" >Cinemas </h1>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}
.creditCardForm {
    font-size: 20px;
    float :left;
    max-width: 700px;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
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
		h3{
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
        
            <meta charset="utf-8"></style>
    <title>Credit card validation</title>
<script type="text/javascript">
function validate()
{
   
var num=document.getElementById('cardno').value;
var no = num.replace(/\s/g,'');
var name=document.getElementById('cardname').value;
var year=document.getElementById('yeardropdown').value;
var month=document.getElementById('monthdropdown').value;
var scode=document.getElementById('seccode').value;
var addres=document.getElementById('address').value;
var baddres;
    if(document.getElementById('baddress').checked) 
         baddres = document.getElementById('address').value;
    else
        baddres = document.getElementById('billaddress').value; 
var pnum=document.getElementById('phonenum').value;
var flag;
var today=new Date();
var todaymonth=today.getMonth();
var todayyear=today.getFullYear();

if(no=="")
alert("Please enter credit card number!");
    
 if(name=="")
alert("Please enter card holder's name!");
    
 if(todayyear==year)
if(todaymonth>month)
alert("Select a valid expiry date!");
    
 if(scode=="" || scode.length != 3 || isNaN(scode))
alert("Please enter valid Security Code!");

 if(addres=="")
alert("Please enter Address");
    
 if(baddres=="")
alert("Enter Bill Address");
    
if(pnum=="" || pnum.length != 10 || isNaN(pnum))
alert("Enter Phone Number Please");
    
 if(no.charAt(0) == "5")
flag=mastercardvalidation(no);

 if(no.charAt(0)=="4")
flag=visacardvalidation(no);
    
 if(no.charAt(0)=="3" && no.charAt(1)=="4" || no.charAt(1)=="7")
flag=americanexpressvalidation(no);

}

    function americanexpressvalidation(no)
    {
      var cardno = /^(?:3[47][0-9]{13})$/;
      if(no.match(cardno))
            {
            alert("AMEX Transaction Successful!");
                return true;
            }
          else
            {
            alert("Not a valid Amercican Express credit card number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    
    function visacardvalidation(no)
    {
      var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
      if(no.match(cardno))
            {
             alert("VISA Transaction Successful!");
                return true;
             }
          else
            {
            alert("Not a valid Visa credit card number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    
    function mastercardvalidation(no)
    {
      var cardno = /^(?:5[1-5][0-9]{14})$/;
      if(no.match(cardno))
            {
               alert("MASTERCARD Transaction Successful!");
                return true;
            }
          else
            {
            alert("Not a valid Mastercard number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(monthfield, yearfield){
var today=new Date()
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m],m)
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], today.getMonth(), true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear+=1
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}


</script>
    </head>
<br>
<body onload="populatedropdown('monthdropdown','yeardropdown')" class="touch" background="images/background.jpg" topmargin="0">
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
	<?php 
		$conn = mysqli_connect('localhost', 'hnuthalapati1', 'hnuthalapati1','hnuthalapati1');
		$sql="SELECT Fare FROM ticket";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		?>

		<span> <p>Total fare:$<?php echo $row[0] ?><p></span>

		<div class="creditCardForm">
        <div class="heading">
                <h3>Confirm Purchase</h3>
            </div>
    <form name="for1"  onsubmit="validate()" action = "ticket.php">
        
<table>

<tr><td>Card No:
      <td><input id="cardno"></td><img id = "image" src="">
</tr>
<tr><td>Card Holder Name:
      <td><input id="cardname"></td>
</tr>
<tr><td>Expiry Date:
      <td><select id="monthdropdown"></select>
   <select id="yeardropdown"></select>
      </td>
</tr>
    <tr><td>Security Code:
      <td><input id="seccode"></td>
</tr>
    <tr><td>Address:
      <td><input id="address"></td>
</tr><tr><td>Billing Address:
      <td></tr>
    <td><input type="radio" id="baddress"value="Same"> Same as the Address
    </td>
    <td><input id="billaddress"></td>
<tr><td>Phone Number:
      <td><input id="phonenum"></td>
</tr>
<tr><td colspan=2 align=center>
<input type="Submit" value="Submit" />
<input type = "submit" value="Cancel" onclick="user_home.php"/></tr>
</table>
    </form>
    </div>
	<footer>
  		<p>Created by:#RB</p>
  			
	</footer>
    </body>
    </html>

