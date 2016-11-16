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

						<li class="active"><a href="recommend.php">Recommendations</a></li>
						<li><a href="suggest.php">Suggestions</a></li>
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
				include("config.php");

	  $viewid=$_REQUEST['ID'];
	  $vtb=mysql_query("select * from suggestion where ID='$viewid'");
	  $r=mysql_fetch_array($vtb);
	  			//echo "$r[place]";

	 
	  $abc=mysql_query("select * from location where place='$r[place]'");
	  $v=mysql_fetch_array($abc);
	  
	  ?>
			    	 		<div class="map"> <img src="upload/<?php echo $v['photo'] ; ?>" alt="" width="353" height="332">
					
			    	 		

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Recommendations </h1> 
                  		<div class="col-md-8 about-left">
         
    <form method="post" action="" enctype="multipart/form-data">
      <table width="70%" border="0">
	  <tr>          <td>Overall</td>


          <td>Features</td>
                      <td>Transport</td>
                      <td>Price</td>

                                  <td>Comments</td>

          </div></td>
          </tr>
       
         <?php   
		 	  $ab=mysql_query("select * from rank where Place='$r[place]'");
  
	  while($s=mysql_fetch_row($ab))
{
	echo "<tr class='light'>
	            <td>$s[1]</td>

            <td>$s[2]</td>
            <td>$s[3]</td>
            <td>$s[4]</td>
            <td>$s[5]</td>


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
