<?php
include("config.php");
session_start();
	$username=$_SESSION['cld'];
	if(!($_SESSION['cld']))
{
header("location:login.php");
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Perfect Destination Traveling Website Template | Contact :: W3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script type="text/javascript">
function chk()
{
	var a=document.getElementById("n").value;
	if(a=="")
	{
	document.getElementById("n").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("n").innerHTML="";
	}
}
function chk1()
{
	var b=document.getElementById("un").value;
	if(b=="")
	{
	document.getElementById("un").innerHTML="Userid must be filled";	
	}
	else
	{
		document.getElementById("un").innerHTML="";
	}
}
function chk2()
{
	var c=document.getElementById("p").value.length;
	if(c<=6)
	{
		document.getElementById("p").innerHTML="password too short";
	}
	else
	{
		document.getElementById("p").innerHTML="";
	}
}
function chk10()
{
	var c=document.getElementById("p").value.length;
	var t=document.getElementById("cc").value.length;
	if(c!=t)
	{
		document.getElementById("p").innerHTML="Password Mismatched";
	}
	else
	{
		document.getElementById("p").innerHTML="";
	}
}
function chk3(evt)
{
	var e=event||evt;
	var code=e.which || e.keyCode;
	if(code<48||code>57)
	{
	return false;	
	}word}
function chk5()
{
	var f=document.getElementById("ad").value;
	if(f=="")
	{
	document.getElementById("ad").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("ad").innerHTML="";
	}
}
function chk7()
{
	var x=document.getElementById("e").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("e").innerHTML="Invalid E-mail ID";
	}
	else
	{
		document.getElementById("e").innerHTML="";
	}
}	

</script>
</head>
<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<p style="color:#F00; font-size:xx-large">MOBI CONTEXT</p>
				</div>
				<!---End-logo---->
				<!---start-top-nav---->
				<div class="top-nav">
					<ul>
						<li class="active" ><a href="cloudhome.php">Home</a></li>

					<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
                        						<li><a href="logout.php">Logout</a></li>

					</ul>
				</div>
				<div class="clear"> </div>
				<!---End-top-nav---->
			</div>
			<!---End-header---->
		</div>
		<!---End-wrap---->
		<div class="clear"> </div>
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 		<div class="map">				  	<img src="images/sea.jpg" width="450" height="350">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">User Search </h1> 
                  		<div class="col-md-8 about-left"> <form action="" method="post"><table width="200" border="0">
  <tr>
    <td>Enter a name</td>
    <td>
      <select name="select">          <option>Select</option><?php
$ab=mysql_query("select name from register ");//getting details of a particular user

while($s=mysql_fetch_row($ab))
{
          echo "<option value= '$s[0]'> $s[0]</option>";
}
?>

          
        </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <input type="submit" name="b" value="Submit">
    </label></td>
    </tr>
</table>
                  <label></label>
                </form>
                
                
                <form></form>
                <form name="form1" method="post" action="">
                  <table width="100%" height=`100% border="1">
                    <tr>
                      <thead >

<td bgcolor="#99FFFF">UserName</td>
<td bgcolor="#99FFFF">Dob</td>

<td bgcolor="#99FFFF">Address</td>
<td bgcolor="#99FFFF">Email</td>
<td bgcolor="#99FFFF">Contact</td>

</thead>
</tr>
<?php
   mysql_connect("localhost","root","");
mysql_select_db("mobi__context_2016");
if(isset($_POST['b']))
{
$name=$_POST['select'];
$vtb=mysql_query("select * from register having name='$name' ");//getting details of a particular user

while($r=mysql_fetch_row($vtb))

{
	echo "<tr class='light'>

            <td>$r[1]</td>
            <td>$r[5]</td>
			            <td>$r[7]</td>

            <td>$r[9]</td>
            <td>$r[8]</td>

           


			</tr>";
}}
?>

                  </table>
                </form>
                    </div>
          
    
  				</div>				
			  </div>
			  </div>
			<!---End-contact---->
			<div class="clear"> </div>
		</div>
		<!---End-content---->
		<div class="clear"> </div>
		<!---start-footer---->
		<div class="footer">
			<div class="wrap">
			<div class="footer-grids"></div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
		</div>
		<!---End-footer---->
		<div class="clear"> </div>
		<div class="copy-right">
			<p>Design by <a href="">White Oval Technologies</a></p>
		</div>
	</body>
</html>
