<?php
include("config.php");
session_start();
if(!($_SESSION['adm']))
{
header("location:login.php");
}
$username=$_SESSION['adm'];
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
                     <?php     
	  $viewid=$_REQUEST['ID'];
	  $ab=mysql_query("select * from location where place='$viewid'");
	  $s=mysql_fetch_array($ab);
	  ?>
			    	 		<div class="map">				  
                            	<img src="upload/<?php echo $s[3] ?>" alt="" width="323" height="232"</img>

					   			
					   		</div>
      				</div>
      			 
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Ranking </h1> 
                  		<div class="col-md-8 about-left">
         
          
    <form method="post" action="" enctype="multipart/form-data">
      <table width="98%" border="0">
        
        <tr><td>Suggested By</td>
        
        <td>Suggested To</td></tr>
        <?php
include("config.php");
$vtb=mysql_query("select * from suggestion where place='$viewid'");
while($r=mysql_fetch_row($vtb))
{
	
	echo "<tr class='light'>
            <td>$r[3]</td>
            <td>$r[2]</td>

            
						</tr>";
}
?>

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
	
	$VarCityname=$_POST['cn'];
		 $VarPlacename=$_POST['pn'];

	
	$photo=$_FILES['photo']['name'];
	
	 $VarAddress=$_POST['add'];
	 move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
	 $VarDescription=$_POST['d'];
	$ins=mysql_query("insert into location(place,city,photo,direction,address)values('$VarPlacename','$VarCityname','$photo','$VarDescription','$VarAddress')");
				   
	if($ins>0)
	{
	echo"<script>alert('You have successfully added'); window.location='adminhome.php';</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>