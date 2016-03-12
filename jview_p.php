<?php
  mysql_connect("localhost","root","") or die("no connection");
  mysql_select_db('prison') or die("db not selected");
  
  $sel="select * from prisoner";
  $exe=mysql_query($sel) or die("not fired");
  
  
?>




<html>
<head>


<title>Prisoner Details</title>
	  <link href="css/glry.css" rel="stylesheet" type="text/css">
	  	  <link href="css/menuc.css" rel="stylesheet" type="text/css">
		  	  <link href="css/control.css" rel="stylesheet" type="text/css">

<style>


.text{float:left;text-align:center;width:100%;}
.text h2{font-style:italic;font-size:40px;color:#FF66CC;}
.division{float:left;width:50%;}
.t{float:left;font-size:30px;color:#3300CC;}

</style>
</head>

<body style="background:url(img/Middle_texture.jpg) repeat;">

 <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='jcontrol.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='prisoner.php'">ADD PRISONER</div>
			  <div class="menu" onClick="window.location.href='jview_p.php'">VIEW PRISONER</div>
			  <div class="menu" onClick="window.location.href='jview_fdb.php'">VIEW FEEDBACK</div></strong>
			  
	    </div>
		</div>
<div class="text">

<h2><span style="color:#0000CC" >Prisoner Details</span></h2>
</div>





<div class="t">
	   <?php
              $i=1;
              while($fetch=mysql_fetch_array($exe))
               {
       ?>
	 <table>
	  NAME : <tr><?php echo $fetch['name'];?></tr><br>
	  CRIME :<tr><?php echo $fetch['crime'];?></tr><br>
	  DURATION :<tr><?php echo $fetch['duration'];?></tr> years<br>
	 
	  MEDICAL DETAILS:<tr><?php echo  $fetch['medical'];?></tr>
       <br>
	   <br>   
	 </table>
	 
	 <?php
	    $i++;
		}
	 ?>
	 	

</div>
</body>

<div class="division">

</div>
</html>