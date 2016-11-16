<?php
include("config.php");
session_start();
if(!($_SESSION['cld']))
{
header("location:login.php");
}
$username=$_SESSION['cld'];
?>
<!DOCTYPE HTML>
<head>
<title>Mobi Context-A venue recommendation framework</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="logo">
					<p style=" color:#FF0000;font-size:xx-large"> MOBI CONTEXT</p>
				</div>
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
			<!---End-header---->
		<!---start-content---->
		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>About us</h3>
					 </div>
					<div class="about-info">
						
						<form name="form1" method="post" action="">
                  <table style="border:double" width="100%"><tr>
				    <thead bgcolor="#99FFFF">
<td>Place</td>

<td>City</td>
<td>Image</td>



<td>Address</td>
<td>Description</td>


</thead></tr>
<?php
include("config.php");
$vtb=mysql_query("select * from location");//selecting details of the place added by admin
while($r=mysql_fetch_row($vtb))
{
	?>
	<tr><td><?php echo $r[1]?></td>
	<td><?php echo $r[2]?></td>
<td><img src="upload/<?php echo $r[3] ?>"</img> </td>
	<td><?php echo $r[4]?></td>
	<td><?php echo $r[5]?></td>

			</tr>
            <?php


}
				  ?>
                  
</table>
			      
				</form>		</div>
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