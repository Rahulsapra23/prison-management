<html>
   <head>
      <title>add images</title>
	  <link href="css/glry.css" rel="stylesheet" type="text/css">
	  	  <link href="css/menuc.css" rel="stylesheet" type="text/css">
		  	  <link href="css/control.css" rel="stylesheet" type="text/css">
   </head>  
	  <?php
	      mysql_connect("localhost","root","");
		  mysql_select_db("prison");
		  if($_POST['submit']="submit")
		  {
		    $name=$_FILES['t_image']['name'];
			$temp=$_FILES['t_image']['tmp_name'];
			$path="image/".$name;
			$r=move_uploaded_file($temp,$path);
			if($r==true)
			{
			  $ins="insert into gallery set image='".$name."',
			                                text='".$_POST['text']."'";
			  
			  mysql_query($ins);
			}
			  
          }
	 ?>
	 
		    
   
     <body background="img/Middle_texture.jpg">

	     <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='control.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='addimg.php'">ADD IMAGE</div>
			  <div class="menu" onClick="window.location.href='view_P.php'">VIEW PRISONER</div>
			  <div class="menu" onClick="window.location.href='view_fdb.php'">VIEW FEEDBACK</div></strong>
			  
	    </div> 
		   
  
		  
	  
	  
      
	    <div class="outer_img">
	     <div class="ph">
		   <form enctype="multipart/form-data" method="post">
		       <table>
			   <tr>
			      <td><input type="file" name="t_image"/><br></td><br><br>
				  
			   </tr>
			   
			   <tr>
			     <td><textarea rows="10" cols="50" name="text"></textarea></td><br>
			   </tr>
			   
			   <tr>
			      <td><input type="submit" name="submit" value="submit"/><br></td><br>
				  
			   </tr>
			   </table>
			</form>
	      </div>
		  		     
	  </div>

   </body>
</html>   
   