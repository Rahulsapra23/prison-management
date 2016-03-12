
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
      <title>register</title>
	  
   
      <link href="css/reg.css" rel="stylesheet" type="text/css">
	  <script>
	     function validateForm()
		 {
		   var fname = document.forms["register"]{"fname"].value;
		   if(fname == null||fname == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   if(gender == null||gender == "")
		   {
		     alert("gender must be selected");
			 return false;
		   }	 
		   
		   if(email == null||email == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   if(address == null||address == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   if(contact == null||contact == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   if(event == null||event == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   if(package == null||package == "")
		   {
		     alert("name must be filled");
			 return false;
		   }	 
		   
		   
		 }  
	  </script>
      
   </head>
   
   <body>
    <div class="outer">
	  <div class="title">Prison Management System (PRIMS)
	     <div class="img"><img src="img/download (3).jpg" width="100px" height="95px;"/></div>
	  </div>
   
       
      <div class="outer_2">
	  
	       <div class="registration">Registration</div>
	    
		     <form name="register" action="form.php" onSubmit="return validateForm()" method="post">
			      
		          <div class="part">
			        <div class="feild"><?php echo "*" ?>Name :</div>
			        <div class="text"><input type="text" name="fname"  value="" ></div>
			      </div>
			
			    			    				
				<div class="part">
			        <div class="feild"><?php echo "*" ?>Gender :</div>
			        <div class="text">male<input type="radio" name="gender" value="male"/>
					                  female<input type="radio" name="gender" value="female"/> 
					</div>
			     </div>
				 
				 <div class="part">
			        <div class="feild"><?php echo "*" ?>ID:</div>
			        <div class="text"><input type="text" name="email" value=""/></div>
			      </div> 
				  
				  <div class="part">
			        <div class="feild">Address :</div>
			        <div class="text"><input type="text" name="address" value=""/></div>
			      </div>
				  
				  <div class="part">
			        <div class="feild"><?php echo "*" ?>Contact :</div>
			        <div class="text"><input type="text" name="con" value=""/></div>
			      </div>
				    <div class="part">
			        <div class="feild"><?php echo "*" ?>Email :</div>
			        <div class="text"><input type="text" name="con" value=""/></div>
			      </div>
				  
				  
			     
				  
				
				  </div>
				
				<div class="part" style="font-size:22px; font-style:italic; font-family:'Monotype Corsiva'">  		
				  <?php
	                 echo "* marked fields are mandatory"; 
	              ?> 					
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
