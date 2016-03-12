<?php
  mysql_connect("localhost","root","") or die("no connection");
  mysql_select_db('prison') or die("db not selected");
  
  $sel="select * from gallery limit 0,9";
  $exe=mysql_query($sel) or die("not fired");
  
  
?>

   
 
       

<html>
<head>
   <title>Gallery</title>
  
<link href="css/glry.css" rel="stylesheet" type="text/css">
	  	  <link href="css/menuc.css" rel="stylesheet" type="text/css">
		  	  <link href="css/about.css" rel="stylesheet" type="text/css">

</head>
  
  <body style="background:url(img/Middle_texture.jpg) repeat;">
     
  
 <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='front.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='prison.php'">PRISONS</div>
			  <div class="menu" onClick="window.location.href='about.php'">ABOUT</div>
			  <div class="menu" onClick="window.location.href='gallery.php'">GALLERY</div>
			  <div class="menu" onClick="window.location.href='feedback.php'">FEEDBACK</div>
		      <div class="menu" onClick="window.location.href='contact.php'">CONTACT</div></strong>
	    </div>
   
   <div class="outer_img">
      <h2><span style="font-size:60px; font-family: 'Monotype Corsiva'; color:#0000FF;">Gallery</span></h2>
   <?php
    $i=1;
    while($fetch=mysql_fetch_array($exe))
    {
   ?>
    
	<div class="photo">
	
	<table>
	  <tr><img src="img/<?php echo $fetch['image'];?>" width="300px" height="300px;" ></tr><br><br>
	 
	  <tr style="background-color:#CC6699; color:#FFFFFF;  font-size:24px;"><?php echo $fetch['text'];?></tr>
          
	 </table>
	</div>
	
	
	<?php
	  $i++;
	  }
   ?>
        </div>
     </div>
   </body>
  </html>
   
 
   
   
  </body>   