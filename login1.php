<?php
mysql_connect("localhost","root","");
mysql_select_db("mobi2016");
if(isset($_POST['s']))
{
$username=$_POST['u'];
$password=$_POST['p'];
$result=mysql_query("select *from register where username='$username'&& password='$password' && status='approved'");
	$r=mysql_fetch_array($result);
	$u=$r['type'];
	if($u=="admin")
	{
	session_start();
	$_SESSION['adm']=$username;
	echo'<script> window.location="adminhome.php"; </script> ';
	}
	else if($u=="user")
	{
	session_start();
	$_SESSION['usr']=$username;
	echo'<script> window.location="userhome.php"; </script> ';
	}



	
	else
	{
		echo "<script>alert('Invalid User'); window.location='index.php';</script>";
		
	
	}}
	
	?><!--
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
						<li ><a href="index.php">Home</a></li>
                        						<li class="active"><a href="login.php">Login</a></li>

						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
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
			    	 		<div class="map"><img src="images/log.jpg">
					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3 style="color:#FF0000">Login Here..!!!</h3>
					    <form action="" method="post"><table width="400" height="200" border="1">
  <tr>
    <td>Username</td>
    <td><input name="u" type="text"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="p" type="password"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="s" id="s" value="Submit"></td>
    </tr>
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
			<div class="footer-grids">
				<div class="footer-grid">
					
				</div>
				
					</div>
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

