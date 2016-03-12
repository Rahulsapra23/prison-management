<?php
  mysql_connect("localhost" ,"root" ,"") or ("no connection");
  mysql_select_db("prison") or ("db not connected");
  
  if($_POST['submit']="submit")
  {
    $insert="insert into feedback set
	                                          name='".$_POST['name']."',
											  fdb='".$_POST['feedback']."'";
											  
											  mysql_query("$insert");
	}										  
											  
?>



<html>
	<head>
		<title>Feedback</title>
		<style>
		.header1{text-align:center;width:1000px; height:300px; border:0px solid #000000;margin:0px auto;font-size:18px;}
		.text{float:left;width:1000px;height:450px;font-size:18px;}
		</style>
		 <link href="css/about.css" rel="stylesheet" type="text/css">
	</head>

	<body style="background:url(img/Middle_texture.jpg) repeat;">

	<div class="header1">
	 <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='front.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='prison.php'">PRISONS</div>
			  <div class="menu" onClick="window.location.href='about.php'">ABOUT</div>
			  <div class="menu" onClick="window.location.href='gallery.php'">GALLERY</div>
			  <div class="menu" onClick="window.location.href='feedback.php'">FEEDBACK</div>
		      <div class="menu" onClick="window.location.href='contact.php'">CONTACT</div></strong>
	    </div> 
	<h2>FEEDBACK</h2>
			<form name="login" action="feedback.php" method="post">
			<div class="text">
			<table width="500" height="500" border="0px">
			<tr>
				<td>
				<label> Name: </label>
				<input type="text" value="" name="name" required>
				</td>
				<tr>
					<td>
					<label>Feedback: </label>
					<input type="text" name="feedback" value="">
				
				 
				</td>
				</tr>	
			</tr>
			<tr>
				<td align="center";>
				<input type="submit" name="" value="submit">
				</td>
			</tr>
		</table>
		
	</form>
	</div>
	</body>
</html>