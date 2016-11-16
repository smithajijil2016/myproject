<?php
include("config.php");
session_start();

?>

<!DOCTYPE HTML>
<head>
<title>Mobi Context-A venue recommendation framework</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style>
table tr td:empty {
    width: 50px;
}

table tr td {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
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
						<li ><a href="userhome.php">Home</a></li>

						<li ><a href="profile.php">Edit Profile</a></li>
                        						<li class="active"><a href="viewlocation.php">View Location</a></li>

						<li><a href="recommend.php">Recommendations</a></li>
						<li><a href="comment.php">Comments</a></li>
                        						<li><a href="logout.php">Logout</a></li>
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
					    <h3 style="color:#F00">Locations</h3>
					 </div>
					<div class="about-info">
						
						<form name="form1" method="post" action="">
                  <table style="border:double" width="100%" height="100%"><tr>
				    <thead bgcolor="#99FFFF">
                    <td>ID</td>

<td>Place</td>




<td>Description</td>
<td>Updation</td>
<td>View in Map</td>


</thead></tr>
<?php
include("config.php");
$vtb=mysql_query("select * from location");
while($r=mysql_fetch_row($vtb))
{
	
	echo "<tr class='light'>
            <td>$r[0]</td>
            <td>$r[1]</td>

            <td>$r[4]</td>

             
			 			<td><a href='viewimage.php?ID=$r[0]' ><font color='green'>View Image && Rank</a></td>
			 			<td><a href='last123.php?ID=$r[0]'><font color='green' >View in Map</font></a></td>

						</tr>";
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