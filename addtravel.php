<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];
$vtb=mysql_query("select * from register where username='$username'");

$r=mysql_fetch_array($vtb);
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

						<li ><a href="hotel.php">Hotel</a></li>
                        						<li ><a href="addtravel.php">Travel</a></li>

						
						<li><a href="hospital.php">Hospitals</a></li>
						<li><a href="theatres.php">Theatres</a></li>
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
					
			    	 		<div class="map"><img src="images/2.jpg" alt="" width="281" height="270"></div>
      				</div>
      			
				</div>				
			  <div class="col span_2_of_3">   <form name="form1" method="post" action="">
				    <table width="200" border="0">
                    			        <tr>
				        <td width="115">Name</td>
				        <td width="69"><label for="n"></label>
			            <input type="text" name="n" id="n" value="<?php echo $r['name']?>"></td>
			          </tr>    
				      <tr>
				        <td width="115">Source</td>
				        <td width="69"><label for="n"></label>
			            <input type="text" name="s" id="s"></td>
			          </tr>
				      <tr>
				        <td>Destination</td>
				        <td><label for="add"></label>
                        			            <input type="text" name="ds" id="ds" required></td>

			          </tr>
                      <tr>
				        <td>Date of Booking</td>
				        <td><label for="p"></label>
			            <input type="date" required name="db" id="db"></td>
			          </tr>
                      <tr>
				        <td>Date of Travel</td>
				        <td><label for="p"></label>
			            <input type="date" name="dt" required id="p"></td>
			          </tr>
				      <tr>
				        <td>Mode of Transport</td>
				        <td><label for="p"></label>
				          <label for="m"></label>
				          <select name="m" required="required" id="m">
				            <option>Bus</option>
				            <option>Train</option>
				            <option>Car</option>
				            <option>Flight</option>
	                    </select></td>
			          </tr>
                      <tr>
				        <td>Adults</td>
				        <td><label for="p"></label>
			            <input type="text" name="ad" required id="ad" onBlur="chk3()"onKeyPress="return chk3()"></td>
			          </tr>
                      <td>Children</td>
				        <td><label for="p"></label>
			            <input type="text" name="ch"  id="ch" onBlur="chk3()"onKeyPress="return chk3()"></td>
			          </tr>
				      <tr>
				        <td colspan="2"><input type="submit" name="sub" id="sub" value="Submit"></td>
			          </tr>
			        </table>
                  
			      </form></div>
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
$name=$_POST['n'];
$sou=$_POST['s'];
$des=$_POST['ds'];
$dob=$_POST['db'];
$dot=$_POST['dt'];
$m=$_POST['m'];
$ad=$_POST['ad'];
$ch=$_POST['ch'];

{
$ins=mysql_query("insert into booking (name,source,destination,dateofbook,dateoftravel,mode,adult,children,status)values('$name','$sou','$des','$dob','$dot','$m','$ad','$ch','waiting')");
}
if($ins)
	{
		echo "<script>alert('You have successfully booked'); window.location='tourist.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>
			
			