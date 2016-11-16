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
function Checkfiles()
{
var fup = document.getElementById('filename');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc")
{
return true;
} 
else
{
alert("Upload Gif or Jpg images only");
fup.focus();
return false;
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
						<li class="active"><a href="adminhome.php">Home</a></li>

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
			    	 		<div class="map">				  	<img src="images/reg.jpg" width="256" height="256">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
   <form action="" method="post">                  <h3 style=" alignment-adjust:middle;color:#F00"> Register</h3>

  
<div class="rTable">
<div class="rTableBody">
<div class="rTableRow">
<div class="rTableCell">Name</div>
<div class="rTableCell"><input id="n" name="n" required="" type="text" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Username</div>
<div class="rTableCell"><input id="un" name="un" required="" type="text" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Password</div>
<div class="rTableCell"><input id="p" name="p" required="" type="text" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Confirm Password</div>
<div class="rTableCell"><input id="cc" name="cc" required="" type="text" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Dob</div>
<div class="rTableCell"><input id="datepicker" name="datepicker" required="" type="date" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Gender</div>
<div class="rTableCell"><input id="f" name="radio" type="radio" value="f" /> <label for="f">Female <input id="m" name="radio" type="radio" value="m" /> Male</label></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Address</div>
<div class="rTableCell"><label for="ad"></label> <textarea id="ad" cols="45" name="ad" required="" rows="5"></textarea></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Phone No</div>
<div class="rTableCell"><label for="p"></label> <input id="cp" name="cp" required="required" type="text" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Email Id</div>
<div class="rTableCell"><label for="e"></label> <input id="e" name="e" required="" type="email" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Image</div>
<div class="rTableCell"><label for="photo"></label> <label for="photo"></label> <input id="photo" accept="image/*" multiple="multiple" name="photo" type="file" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell"><input id="s" name="s" type="submit" value="Register" /></div>
</div>
</div>
</div>
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
mysql_select_db("mobi2016");
if(isset($_POST['s']))
{
$name=$_POST['n'];
$user=$_POST['un'];
$pass=$_POST['p'];
$conf=$_POST['cc'];
$dob=$_POST['d'];
$gen=$_POST['radio'];
$add=$_POST['ad'];
$con=$_POST['cp'];
$email=$_POST['e'];
$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
{
$ins=mysql_query("insert into register (name,username,password,confirm,dob,gender,address,phone,email,photo,type,status)values('$name','$user','$pass','$conf','$dob','$gen','$add','$con','$email','$photo','user','waiting')");
}
if($ins)
	{
		echo "<script>alert('You have successfully registered'); window.location='index.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>
			
