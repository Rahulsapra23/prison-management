<?php

  session_start();
  if(!isset($_SESSION['user']))
  header('location:admin.php');

?>


  
<html>
 <head>
   <title>admin_main</title>
   <link href="css/css/control.css" rel="stylesheet" type="text/css">
   <link href="css/menuc.css" rel="stylesheet" type="text/css">
   
 </head>
 <body style="background:url(img/Middle_texture.jpg) repeat;">
   
   <div class="outer_1">
       
	   
	   <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='control.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='addimg.php'">ADD IMAGE</div>
			  <div class="menu" onClick="window.location.href='view_P.php'">VIEW PRISONER</div>
			  <div class="menu" onClick="window.location.href='view_fdb.php'">VIEW FEEDBACK</div>
			   <div class="menu" >
			    
				 <a href="front.php"><input type="button" name="logout" value="logout"></a>
				
				
			  </div></strong>
			  
	    </div> 
		   
  
    <strong> <span style="text-align:center; color:#0000FF; font-size:38px; font-family:'Monotype Corsiva';" ><p>Welcome to the control panel....!!!!</p></span></strong>
	    
		<div class="slider">
		
                  <img src="img/images (3).jpg" width="1350px" height="500px;"/>

        </div>
		</div>
 </body>
</html>