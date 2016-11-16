<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];

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
	var a=document.getElementById("s1").value;
	if(a=="")
	{
	document.getElementById("s1").innerHTML="field is empty";	
	}
	
}
function chk11()
{
	var b=document.getElementById("s2").value;
	if(b=="")
	{
	document.getElementById("s2").innerHTML="field is empty";	
	}
	
}function chk1()
{
	var c=document.getElementById("s3").value;
	if(c=="")
	{
	document.getElementById("s3").innerHTML="field is empty";	
	}
	
}function chk2()
{
	var d=document.getElementById("s4").value;
	if(d=="")
	{
	document.getElementById("s4").innerHTML="field is empty";	
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
                        						<li class="active"><a href="viewlocation.php">View Location</a></li>

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
					 <?php     
	  $viewid=$_REQUEST['ID'];
	  $vtb=mysql_query("select * from location where ID='$viewid'");
	  $r=mysql_fetch_array($vtb);
	  ?>
			    	 		<div class="map"> <img src="upload/<?php echo $r['photo'] ; ?>" alt="" width="323" height="232">
						

					   			
					   		</div>
      				</div>
      			
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                  <h1 style="font-size:large; color:#0066FF">Ranking </h1> 
                  		<div class="col-md-8 about-left">
          <?php     
	  $viewid=$_REQUEST['ID'];
	  $vtb=mysql_query("select * from location where ID='$viewid'");
	  $r=mysql_fetch_array($vtb);
	  ?>
          
    <form method="post" action="" enctype="multipart/form-data">
      <table width="50%" border="0">
	  <tr>
          <td>Place</td>
                         <td> <input type="text" name="p" id="p" value=" <?php echo $r['place']; ?>"></td>
          </tr>
        
        <tr>
          <th width="33%">Overall</th>
          <td width="67%"><label for="n3"></label>
            <label for="cn"></label>
            <label for="s1"></label>
            <select required name="s1" id="s1" >
                                        <option></option>

              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td><td><span id="a4"></span></td>
        </tr>
        
        <tr>
          <th>Features</th>
          <td>
             <label for="s2"></label>
            <select name="s2" id="s2" required>
                                        <option></option>

              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td><td><span id="a1"></span></td>
        </tr>
             
        <tr>
          <th>Transport</th>
          <td><label for="photo"></label>
             <label for="s1"></label>
            <select name="s3" id="s3"   required>
                                        <option></option>

              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td><td><span id="a2"></span></td>
        </tr>
       <tr>
          <th>Price</th>
          <td><label for="add"></label>
            <label for="add"></label>
             <label for="s1"></label>
            <select name="s4" id="s4"  required>                            <option></option>


              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td>
            <td><span id="a3"></span></td>
          </tr>
        <tr>
          <th>Comments</th>
          <td><textarea name="com" cols="5" rows="5" required></textarea></td>
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
include("config.php");
if(isset($_POST['sub']))
{
	
	$place=$_POST['p'];
		 $overall=$_POST['s1'];
		 $features=$_POST['s2'];
		 $transport=$_POST['s3'];

	
	
	 $price=$_POST['s4'];
	 		 $comment=$_POST['com'];

	$ins=mysql_query("insert into rank(Place,overall,features,transport,price,comment)values('$place','$overall','$features','$transport','$price','$comment')");
				   
	if($ins>0)
	{
	echo"<script>alert('You have successfully added'); window.location='viewlocation.php';</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>