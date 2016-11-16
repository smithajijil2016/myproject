
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
	var c=document.getElementById("pass").value.length;
	if(c<=6)
	{
		document.getElementById("pass").innerHTML="password too short";
	}
	else
	{
		document.getElementById("pass").innerHTML="";
	}
}
function chk10()
{
	var sss=document.getElementById("pass").value.length;
	var t=document.getElementById("confirm").value.length;
	if(sss!=t)
	{
		alert("Password Mismatched");
	}
	else
	{
		document.getElementById("pass").innerHTML="";
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

<script type="text/javascript">
    function fileCheck(obj) {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
                alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
    }
</script>

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
						<li><a href="index.php">Home</a></li>

						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact</a></li>
                        						<li><a href="login.php">Login</a></li>

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
                  <h1 style="font-size:large; color:#0066FF">Register Here</h1> 
    <form method="post" action="" enctype="multipart/form-data">
      <div class="rTable">
<div class="rTableBody">
<div class="rTableRow">
<div class="rTableCell">Name</div>
<div class="rTableCell"><label for="n3"></label> <label for="cn"></label> <input id="n" name="n" type="text"  required/></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Username</div>
<div class="rTableCell"><label for="pn"></label> <label for="pn"></label> <input id="un" name="un" type="text"  required/></div>
</div>
<div class="rTableRow">
<div class="rTableCell"><span style="color: #ff0000;">*Password</span></div>
<div class="rTableCell"><label for="password"></label> <input id="pass" name="pass" type="password" onBlur="chk2()"  /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Confirm Password</div>
<div class="rTableCell"><input id="confirm" name="confirm" required type="password" onBlur="chk10()"  /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Dob</div>
<div class="rTableCell"><input id="d" name="d" required type="date"  min="1993-01-01" max="2016-12-01"/></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Gender</div>
<div class="rTableCell"><input id="f" name="radio" type="radio" value="f"  required/> <label for="f">Female <input id="m" name="radio" type="radio" value="m"  required/> Male</label></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Address</div>
<div class="rTableCell"><label for="ad"></label> <textarea id="ad" cols="45" name="ad" required rows="5"></textarea></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Phone No</div>
<div class="rTableCell"><label for="p"></label> <input id="cp" name="cp" required type="text" onBlur="chk3()" onKeyPress="return chk3()" maxlength="12"/></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Email Id</div>
<div class="rTableCell"><label for="e"></label> <input id="e" name="e" required type="email" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">Image</div>
<div class="rTableCell"><label for="photo"></label> <label for="photo"></label> <input id="photo" accept="image/*" multiple name="photo" type="file" /></div>
</div>
<div class="rTableRow">
<div class="rTableCell">
<div align="center"><input id="sub" name="sub" type="submit" value="Submit" /></div>
</div>
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
include("config.php");
if(isset($_POST['sub']))
{
	
	$name=$_POST['n'];
$user=$_POST['un'];
$pass=$_POST['pass'];
$conf=$_POST['confirm'];
$dob=$_POST['d'];
$gen=$_POST['radio'];
$add=$_POST['ad'];
$con=$_POST['cp'];
$email=$_POST['e'];
	$photo=$_FILES['photo']['name'];
	
	 move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
	 $VarDescription=$_POST['d'];
	 $result=mysql_query("select *from register where username='$user'");
	$r=mysql_fetch_array($result);
	if($r)
	{
		echo "<script>alert('User already exists');</script>";
	}
	else
	{
	$ins=mysql_query("insert into register (name,username,password,confirm,dob,gender,address,phone,email,photo)values('$name','$user','$pass','$conf','$dob','$gen','$add','$con','$email','$photo')");//inserting values into registration table
	$ins2=mysql_query("insert into login(username,password,type,status)values('$user','$pass','user','waiting')");	//inserting values into login table	   
	if($ins>0)
	{
	echo"<script>alert('You have successfully added'); window.location='index.php';</script>";
	}
	else
	{
		echo mysql_error();
	}
}
}
?>