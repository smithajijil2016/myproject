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
						<li ><a href="userhome.php">Home</a></li>

						<li ><a href="profile.php">Edit Profile</a></li>
                        						<li ><a href="viewlocation.php">View Location</a></li>

						<li><a href="recommend.php">Recommendations</a></li>
						<li class="active"><a href="suggest.php">Suggestions</a></li>
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
			    	 		<div class="map">				  	<img src="images/sug.jpg" width="450" height="350">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Suggestions </h1> 
                  		<div class="col-md-8 about-left">
        
          
    <form method="post" action="" enctype="multipart/form-data">
      <table width="98%" border="0">
        
        <tr>
          <th width="33%">Place</th>
         <td>
      <select name="s1" required>          <option></option><?php
$ab=mysql_query("select place from location ");//getting details of a particular user

while($s=mysql_fetch_row($ab))
{
          echo "<option value= '$s[0]'> $s[0]</option>";
}
?>
     
        </select>
    </td>
        </tr>
        
        <tr>
          <th>To</th>
<td>
      <select name="st" required>          <option></option><?php
$ab=mysql_query("select name from register ");//getting details of a particular user

while($s=mysql_fetch_row($ab))
{
          echo "<option value= '$s[0]'> $s[0]</option>";
}
?>

          
        </select>
    </td>            
        </tr>
                 <tr>
          <th>From</th>
          <td><input name="sf" type="text" value="<?php echo $r['name']; ?>"></td>
            
        </tr>
        <tr>
        
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="sub" id="sub" value="Submit" />
          </div></td>
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
include("config.php");
if(isset($_POST['sub']))
{
	
	$VarPlacename=$_POST['s1'];
		 $VarSto=$_POST['st'];

	
	
	 $VarSfrom=$_POST['sf'];
	$ins=mysql_query("insert into suggestion(place,sugto,sugfm)values('$VarPlacename','$VarSto','$VarSfrom')");//adding suggestion details into table
				   
	if($ins>0)
	{
	echo"<script>alert('You have successfully added'); window.location='userhome.php';</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>