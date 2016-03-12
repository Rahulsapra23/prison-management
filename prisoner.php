<?php
  mysql_connect("localhost" ,"root" ,"") or ("no connection");
  mysql_select_db("prison") or ("db not connected");
  
  if($_POST['submit']="submit")
  {
    $insert="insert into prisoner set
	                                          name='".$_POST['name']."',
											  crime='".$_POST['crime']."',
											  duration='".$_POST['duration']."',
											  medical='".$_POST['medical']."'";
											  
											  mysql_query("$insert");
	}										  
											  
?>



<html>
	<head>
		<title>Prisoner</title>
		 <link href="css/css/control.css" rel="stylesheet" type="text/css">
   <link href="css/menuc.css" rel="stylesheet" type="text/css">
  
		<style>
		.header1{text-align:center;width:500px; height:300px; border:0px solid #000000;margin:0px auto;font-size:18px;}
		.text{float:left;width:100%;height:450px;font-size:18px;}
		</style>
	</head>

	<body style="background:url(img/Middle_texture.jpg) repeat;">
	<div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='jcontrol.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='prisoner.php'">ADD PRISONER</div>
			  <div class="menu" onClick="window.location.href='jview_p.php'">VIEW PRISONER</div>
			  <div class="menu" onClick="window.location.href='jview_fdb.php'">VIEW FEEDBACK</div>
			  </strong>
			  </div>
			  
	<div class="header1">
	<br><br>
	<h2><span style="color:#000099">ADD PRISONER</span></h2>
			<form name="login" action="prisoner.php" method="post">
			<div class="text">
			<table width="500" height="500" border="0px">
			<tr>
				<td>
				<label> Name: </label>
				<input type="text" value="" name="name" required>
				</td>
				<td>
				<label> Crime: </label>
				<input type="text" value="" name="crime" required>
				</td>
				<td>
				<label> Duration: </label>
				<input type="text" value="" name="duration" required>
				</td>
				<tr>
					<td>
					<label>Medical details: </label>
					<textarea rows="3" col="5" name="medical" value="">
				
				 </textarea>
				</td>
				</tr>	
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" name="" value="submit">
				</td>
			</tr>
		</table>
		
	</form>
	</div>
	</body>
</html>
