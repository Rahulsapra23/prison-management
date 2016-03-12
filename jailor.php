<?php

session_start();

mysql_connect("localhost","root","") or die("no connection");
mysql_select_db("prison") or die("db not selected");

if(isset($_POST['sub']))
{
   $user=$_POST['uname'];
   $pass=$_POST['pwd'];
   $sel="select * from jailor where uname='".$user."' and pwd='".$pass."'";
   $exe=mysql_query($sel) or die("not fire");
   $c=mysql_num_rows($exe);
   
}

if($c==1)
{
  $_SESSION['user']=$user;
  header('location:jcontrol.php');
}
else
{
  $z="user name or pwd not match";
}
?>


<html>
<head>

<title>Untitled Document</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/about.css" rel="stylesheet" type="text/css">
</head>

  <body background="img/Middle_texture.jpg">
    <div class="outer">
	   <div class="head">
	      <div class="heading"><span style="color:#FF0000;">C</span>ontrol <span style="color:#FF0000;">P</span>anel</div>
	   </div>
	   
	   
	   <div class="main">
	     <Div class="login">
		    <form method="post">
		    <div class="part">
			  <div class="field">Username</div>
			 <div class="text"><input type="text" name="uname" value=""/></div>
			</div>
			
			<div class="part">
			   <div class="field">Password</div>
			   <div class="text"><input type="password" name="pwd" value=""/></div>
	
			</div>
			
			<div class="submit">
			   <input type="submit" name="sub" value="login"/>  
			 </div>
			</form>
		 </div>
	   </div>
	</div>
	
	
  </body>
</html>
