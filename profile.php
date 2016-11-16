<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];
$vtb=mysql_query("select * from register where username='$username'");

$r=mysql_fetch_array($vtb);
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

						<li class="active"><a href="profile.php">Edit Profile</a></li>
                        						<li><a href="viewlocation.php">View Location</a></li>

						<li><a href="recommend.php">Recommendations</a></li>
						<li><a href="comment.php">Comments</a></li>
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
			    	 		<div class="map"><img src="images/edit.jpg" width="345"></div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h2> <font color="#FF0000" size="+1">Welcome <?php echo $r['name']; ?>!!! </font></h2></h1>
                  <p style="font-size:large; color:#0066FF">&nbsp;</p> 
     <form action="" method="post">
				  <table width="500" border="0" height="500">
                    <tr>
                      <td width="111">Name:</td>
                      <td width="73">
                         
                          <label for="n"></label>
                          <input type="text" name="n" id="n" value=" <?php echo $r['name']; ?>"></td>
                    </tr>
                    <tr>
                      <td>D.O.B:</td>
                      <td>
                        <label for="d"></label>
                      <input type="date" name="d" id="d" value="<?php echo $r['dob']; ?>"></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><label>
                       
                      </label>
                        <label for="add"></label>
                      <textarea name="add" id="add" cols="45" rows="5" /><?php echo $r['address']; ?></textarea></td>
                    </tr>
                      
                    <tr>
                      <td>Email:</td>
                      <td><label>
                      
                      </label>
                        <label for="e"></label>
                      <input type="email" name="e" id="e" value="<?php echo $r['email']; ?>"></td>
                    </tr>
                    <tr>
                      <td>Phone No:</td>
                      <td><label>
                   
                      </label>
                        <label for="c"></label>
                      <input type="text" name="c" id="c" maxlength="10" onBlur="chk3()" onKeyPress="return chk3()" value="<?php echo $r['phone']; ?>"></td>
                    </tr>
                   <tr>
				        <td colspan="2"><input type="submit" name="sub" id="sub" value="Submit"></td>
			          </tr>
                  </table>
				</form></div>
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
if(isset($_POST['sub']))
{
$name=$_POST['n'];
$dob=$_POST['d'];

$add=$_POST['add'];
$con=$_POST['c'];
$em=$_POST['e'];


$upd=mysql_query("update register set name='$name',dob='$dob',address='$add',phone='$con',email='$em' where username='$username' ");//Query for updating user details
if($upd)
	{
		echo "<script>alert('You have successfully updated'); window.location='userhome.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>