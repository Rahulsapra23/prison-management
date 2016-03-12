
<?php
  mysql_connect("localhost" ,"root" ,"");
  mysql_select_db("register");
  
  if($_POST['submit']="submit")
  {
    $insert="insert into user_reg set
	                                          name='".$_POST['fname']."',
											  gender='".$_POST['gender']."',
											  email='".$_POST['email']."',
											  address='".$_POST['address']."',
											  contact='".$_POST['con']."',
											  events='".$_POST['events']."',
											  package='".$_POST['package']."'";
											  
											  mysql_query("$insert");
	}										  
											  
?>

<html>
<head>
      <title>login</title>
	  
   
      <link href="css/reg.css" rel="stylesheet" type="text/css">
	  
      
   </head>
   
   <body>
    <div class="outer">
	  <div class="title">Prison Management System (PRIMS)
	     <div class="img"><img src="img/download (3).jpg" width="100px" height="95px;"/></div>
	  </div>
   
       
      <div class="outer_2">
	  
	       <div class="registration">Login</div>
	    
		     <form name="register" action="form.php" onSubmit="return validateForm()" method="post">
			      
		          <div class="part">
			        <div class="feild">Username :</div>
			        <div class="text"><input type="text" name="fname"  value="" ></div>
			      </div>
			
	
				  <div class="part">
			        <div class="feild">Password:</div>
			        <div class="text"><input type="text" name="address" value=""/></div>
			      </div>
			
		             </div>
				  </div>			 
						 
			    		 
				<div class="part">  
			      <div class="submit">
			       <input type="submit" name="" value="submit" />  
			      </div>
				 </div>
				 
				

	          </form>
	   
	 </div>
	 
		 
		 
   </body>

</html>
