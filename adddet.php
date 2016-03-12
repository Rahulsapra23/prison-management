<?php
  mysql_connect("localhost" ,"root" ,"") or ("no connection");
  mysql_select_db("prison") or ("db not connected");
  
  if($_POST['submit']="submit")
  {
    $insert="insert into details set
	                                          heading='".$_POST['heading']."',
											  desc='".$_POST['desc']."'";
											  
											  mysql_query("$insert");
	}										  
											  
?>



<html>
	<head>
		<title>add details</title>
		<style>
		.header1{text-align:center;width:500px; height:300px; border:0px solid #000000;margin:0px auto;font-size:18px;}
		.text{float:left;width:100%;height:450px;font-size:18px;}
		</style>
	</head>
	<body style="background:url(img/Middle_texture.jpg) repeat;">
	<div class="header1">
	<h2>add details</h2>
			<form name="login" action="adddet.php" method="post">
			<div class="text">
			<table width="500" height="500" border="0px">
			<tr>
				<td>
				<label> Heading: </label>
				<input type="text" value="" name="heading" required>
				</td>
				<tr>
					<td>
					<label>Description: </label>
					<textarea rows="3" col="5" name="desc" value="">
				
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