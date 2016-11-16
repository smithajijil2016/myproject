<?php
include("config.php");
session_start();
	$username=$_SESSION['usr'];
	if(!($_SESSION['usr']))
{
header("location:login.php");
}
echo $_SESSION['usr'];
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
						<li class="active"><a href="userhome.php">Home</a></li>

						<li><a href="profile.php">Edit Profile</a></li>
                        						<li><a href="viewlocation.php">View Location</a></li>
                                                <li style="font-size:large"><a href="track123.php">Track Location</a></li>

						<li><a href="recommend.php">Recommendations</a></li>
						<li><a href="suggest.php">Suggestions</a></li>
                        						<li><a href="logout.php">Logout</a></li>

					</ul>				</div>
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
                  		<div class="col-md-8 about-left"> 
   
                
                 <?php
include("config.php");
if(isset($_POST['b']))
{
$name=$_POST['select'];
$vtb=mysql_query("select * from  rank having Place='$name' ");//details about a particular place
while($r=mysql_fetch_row($vtb))
?>
                <h1 style="font:bold; color:#FF0000; font-size:x-large"> <?php echo "You searched for '$name' " ?></h1>
                <?php
}
?>
                <form></form>
                <form name="form1" method="post" action="">
                   
   <table bgcolor="#FFFFFF">
   
 <table width="98%" border="0"><tr>
      <th style="background-color:#99FFFF">Place</th>
      <th style="background-color:#99FFFF">Overall</th>
      <th style="background-color:#99FFFF">Features</th>
            <th style="background-color:#99FFFF">Transport</th>
      <th style="background-color:#99FFFF">Price</th>
      <th style="background-color:#99FFFF">Comments</th>
      <th style="background-color:#99FFFF">Rating</th>

      </tr>
       <?php
include("config.php");
if(isset($_POST['b']))
{
$name=$_POST['select'];
$vtb=mysql_query("select * from  rank having Place='$name' ");//details about a particular place
while($r=mysql_fetch_row($vtb))
{
	echo "<tr class='light'>
            <td>$r[0]</td>
			            <td>$r[1]</td>

			            <td>$r[2]</td>

            <td>$r[3]</td>
            <td>$r[4]</td>
             <td>$r[5]</td>"
?>


<?php 
 $sum=$r[4]+$r[3]+$r[1]+$r[2];
 $rat=($sum/4);
 

			             echo"<td>$rat</td>
						 
			 			<td><a href='viewsuggest.php?ID=$r[0]'><font color='green' >Suggestions</font></a></td>


          </tr>";
  
		}}
		?>                  
</table>
			      
				</form>	
      </form>
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
