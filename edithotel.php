<?php
mysql_connect("localhost","root","");
mysql_select_db("mobi__context_2016");
session_start();
$_SESSION['adm'];

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
						<li class="active"><a href="adminhome.php">Home</a></li>

						<li><a href="addhotel.php">Add Hotel</a></li>
						<li><a href="addhospital.php">Add Hospital</a></li>
						<li><a href="addtheatre.php">Add Theatre</a></li>
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
			    	 		<div class="map">				  	<img src="images/users.jpg" width="300" height="256">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">User Details</h1> 
				    <?php     
	  $viewid=$_REQUEST['ID'];
	  $vtb=mysql_query("select * from  hotel where ID='$viewid'");
	  $r=mysql_fetch_array($vtb);
	  ?>
        <form name="form1" method="post" action="">
				    <table width="500" border="0">
				      <tr>
				        <td width="50">Hotel</td>
				        <td width="150"><label for="n"></label>
			            <input type="text" name="n" id="n" value="<?php echo $r['name']?>" /></td>
			          </tr></br>
				      <tr>
				        <td>Address</td>
				        <td><label for="add"></label><textarea name="add" id="add" cols="45" rows="5 "//><?php echo $r['address']?></textarea></td>
			          </tr>
                      
				      <tr>
				        <td>Contact NO</td>
				        <td><label for="p"></label>
			            <input type="text" name="c" id="c" value="<?php echo $r['phone']?>"></td>
			          </tr>
				        <tr>
				        <td>Rate</td>
				        <td><label for="p"></label>
			            <input type="text" name="r" id="r" value="<?php echo $r['rate']?>"></td>
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
$name=$_POST['n'];
$add=$_POST['add'];
$con=$_POST['c'];
$rate=$_POST['r'];


$upd=mysql_query("update hotel set name='$name',address='$add',phone='$con',rate='$rate' where ID='$viewid'");
if($upd)
	{
		echo "<script>alert('You have successfully added'); window.location='adminviewhotel.php';</script>";
		}
	else
	{
		echo mysql_error();
		
	}
	}
	?>
			
