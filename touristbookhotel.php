<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];
$vtb=mysql_query("select * from register where username='$username'");

$s=mysql_fetch_array($vtb);
//echo "$r[name]";
?>

<!DOCTYPE HTML>
<head>
<title>Mobi Context-A venue recommendation framework</title>
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
						<li ><a href="userhome.php">Home</a></li>

						<li ><a href="touristviewbooking.php">Booking Status</a></li>
                        						
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
					
			    	 		<div class="map"> <img src="images/sug.jpg" alt="" width="323" height="332">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Recommendations </h1> 
                  		<div class="col-md-8 about-left">
         
    <?php     
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
<?php
mysql_connect("localhost","root","");
mysql_select_db("mobi__context_2016");
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
		echo "<script>alert('You have successfully booked'); window.location='hotel.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>