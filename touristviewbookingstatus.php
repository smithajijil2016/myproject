<?php
mysql_connect("localhost","root","");
mysql_select_db("govihar");
session_start();
$username=$_SESSION['tour'];
$vtb1=mysql_query("select * from reg where username='$username'");
	  $s=mysql_fetch_array($vtb1);
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Govihar a Travel Agency Category Flat bootstrap Responsive website Template | About :: w3layouts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->
<script type="text/javascript">	
function chk3(evt)
{
	var e=event||evt;
	var code=e.which || e.keyCode;
	if(code<48||code>57)
	{
	return false;	
	}word}
	</script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.html"><span>Go</span>vihar</a></h1>
				</div>
				<!--navbar-header-->
				
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li><a href="touristhome.php">Home</a></li>
						<li><a href="touristviewhotel.php">Hotels</a></li>
						<li><a href="touristviewbookingstatus.php">View Booking Status</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="logout" id="logoutButton"><span>Logout</span></a>
							
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="about-info">
				<h2><p align="center" style="color:#FF0000;font-size:large"> Booking</h2>
			</div>
			<div class="about-grids">
				<div class="col-md-8 about-left"><?php     
	  $viewid=$_REQUEST['ID'];
	  $vtb=mysql_query("select * from  hotel where ID='$viewid'");
	  $r=mysql_fetch_array($vtb);
	  ?>
                 <form name="form1" method="post" action="">
				    <table width="80%" border="0">
                    <tr>
				        <td width="115">Name</td>
				        <td width="69"><label for="n"></label>
			            <input type="text" name="un" id="un" value="<?php echo $s['name'] ?>"></td>
			          </tr>
				      <tr>
				        <td width="115">Name of Hotel</td>
				        <td width="69"><label for="n"></label>
			            <input type="text" name="n" id="n" value="<?php echo $r['name'] ?>"></td>
			          </tr>
				      <tr>
				        <td>Checkin</td>
				        <td><label for="add"></label>
			            <input type="date" name="cin" id="cin"required="required" ></textarea></td>
			          </tr>
                      <tr>
				        <td>Checkout</td>
				        <td><label for="p"></label>
			            <input type="date" name="co" id="co" required></td>
			          </tr>
				      <tr>
				        <td>Adults</td>
				        <td><label for="add"></label>
			            <input type="text" name="ad" id="ad"  onBlur="chk3()" onKeyPress="return chk3()"required></textarea></td>
			          </tr><tr>
				        <td>Children</td>
				        <td><label for="add"></label>
			            <input type="text" name="ch" id="ch"onBlur="chk3()"onKeyPress="return chk3()" required></textarea></td>
			          </tr><tr>
				        <td>Rooms</td>
				        <td><label for="add"></label>
			            <input type="text" name="r" id="r" onBlur="chk3()"onKeyPress="return chk3()"required></textarea></td>
			          </tr>
				      <tr>
				        <td colspan="2"><input type="submit" name="sub" id="sub" value="Submit"></td>
			          </tr>
			        </table>
                  
			      </form>
			  </div>
				<div class="col-md-4 about-right">
					<img src="images/4.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container --><!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
		  <div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © White oval edu Solutions  . Design by <a href="#">White Oval Technologies</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("govihar");
if(isset($_POST['sub']))
{
	$na=$_POST['un'];

$name=$_POST['n'];
$cin=$_POST['cin'];
$cout=$_POST['co'];
$adult=$_POST['ad'];
$child=$_POST['ch'];
$room=$_POST['r'];


{
$ins=mysql_query("insert into book (name,hid,hotelname,checkin,checkout,adults,children,rooms,status)values('$na','$viewid','$name','$cin','$cout','$adult','$child','$room','waiting')");
}
if($ins)
	{
		echo "<script>alert('You have successfully booked'); window.location='touristhome.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>