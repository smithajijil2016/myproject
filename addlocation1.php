<?php
session_start(); 
if(!($_SESSION['adm']))
{
header("location:login.php");
}
echo $_SESSION['adm'];
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
function validate()
{
var extensions = new Array("jpg","jpeg","gif","png","bmp");
var image_file = document.form.image_file.value;
var image_length = document.form.image_file.value.length;
var pos = image_file.lastIndexOf('.') + 1;
var ext = image_file.substring(pos, image_length);
var final_ext = ext.toLowerCase();
for (i = 0; i < extensions.length; i++)
{
    if(extensions[i] == final_ext)
    {
    return true;
    }
}
alert(" Upload an image file with one of the following extensions: "+ extensions.join(', ') +".");
return false;
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
			    	 		<div class="map">				  	<img src="images/add.jpg" width="356" height="356">

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Add Location</h1> 
    <form method="post" action="" enctype="multipart/form-data">
      <table width="98%" border="0">
         <tr>
          <th>Image</th>
          <td><label for="photo"></label>
            <label for="photo"></label>
            <input type="file" name="photo" id="photo"  onSubmit="return validate();" required /></td>
        </tr>
        <tr>
          <th width="33%">Cityname</th>
          <td width="67%"><label for="n3"></label>
            <label for="cn"></label>
          <input type="text" name="cn" id="cn" required /></td>
        </tr>
        
        <tr>
          <th>Placename</th>
          <td><label for="pn"></label>
            <label for="pn"></label>
            <input type="text" name="pn" id="pn" required /></td>
        </tr>
             
       
       <tr>
          <th>Address</th>
          <td><label for="add"></label>
            <label for="add"></label>
            <label for="add"></label>
            <textarea name="add" id="add" cols="45" rows="5" required></textarea>
          </tr>
        <tr>
          <th>Description</th>
          <td><label for="photo"></label>
            <label for="photo"></label>
            <label for="d"></label>
            <textarea name="d" id="d" cols="45" rows="5" required></textarea>
          </tr>
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
include("config.php");//selecting database
if(isset($_POST['sub']))
{
	{
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

	
	$VarCityname=$_POST['cn'];
		 $VarPlacename=$_POST['pn'];

	
	$photo=$_FILES['photo']['name'];
	
	 $VarAddress=$_POST['add'];
	
    
	 move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");

	 $VarDescription=$_POST['d'];
	$ins=mysql_query("insert into location(place,city,photo,direction,address)values('$VarPlacename','$VarCityname','$photo','$VarDescription','$VarAddress')");// adding location details into database
				   
	if($ins>0)
	{
	echo"<script>alert('You have successfully added'); window.location='adminhome.php';</script>";//script alert if inserted
	}
	else
	{
		echo mysql_error();
	}
}
?>