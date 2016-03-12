<?php
  mysql_connect("localhost","root","") or die("no connection");
  mysql_select_db('prison') or die("db not selected");
  
  $sel="select * from details";
  $exe=mysql_query($sel) or die("not fired");
  
  
?>

  
<html>
<head>
<title>about </title>
     <link href="css/about.css" rel="stylesheet" type="text/css">
	 
   
</head>
  
  <body background="img/Middle_texture.jpg">
  
  
       <div class="outer">
	    <div class="top">
	       <div class="inner_logo" onClick="window.location.href='front.php'"><img src="img/download (3).jpg" width="80px;"height="100px;"></img></div>
		   
		      <strong><div class="menu" onClick="window.location.href='front.php'">HOME</div>
			  <div class="menu" onClick="window.location.href='prison.php'">PRISONS</div>
			  <div class="menu" onClick="window.location.href='about.php'">ABOUT</div>
			  <div class="menu" onClick="window.location.href='gallery.php'">GALLERY</div>
			  <div class="menu" onClick="window.location.href='feedback.php'">FEEDBACK</div>
		      <div class="menu" onClick="window.location.href='contact.php'">CONTACT</div></strong>
	    </div> 
		
		
		<div class="about" >
		   <strong><span style="font-size:35px; color:#0000FF; font-family:'Monotype Corsiva';">ABOUT DEPARTMENT</span><br><br></strong>
		   
	The State of Goa attained the status of Union territory soon after Liberation from portuguese Rules in terms of the Constitution (Twelfth Amendment) Act,1961. Later on,the president of India promulagated an Ordinance to provide for administration of Union territories of Goa,Daman Diu and continuance of Portuguese Laws as in force immediately prior to their liberation.The said ordinance was replaced by Parliamentary enactment namely-the Goa,Daman Diu Administration Act,1962. Evidently,all the portuguese Laws including Portuguese legislation governing prisons in the Union territory were continued till they were replaced by the appropriate corresponding Legislation.The Goa,Daman Diu Removal of Difficulties Order,1962 was issued for equating certain authorities of erstwhile regime to certain new authorities under new set up in order to carry out functions under erstwhile Portuguese Laws during the transition period.
<br><br>
It was realized that the Rules framed under the aforesaid Acts were not meeting the requirements of the inmates in Prisons and the plight of prisoners arose as a critical issue of public policy. The Government has also taken into consideration various directives given by the High Court as well as Apex Court vis-a-vis the modernization of prison system and prison administration in the country. In a case Rammurthy V/s State of Karnataka,the central as well as all States Government were directed by the Apex Court for bringing uniformity in the Laws relating to prisons.
 <br><br>
Considering the aspect of bringing uniformity in the laws relating to prisons, the Bureau of Police Research and Development, Ministry of Home Affairs, Government of India, New Delhi formulated Model Prison Manual for the Superintendence and Management of Prisons in India. Based on this Manual, the Government of Goa constituted a Committee under the Chairmanship of District Magistrate to frame the Jail Manual for the State of Goa and to prepare a comprehensive report on amending/reframing the existing Prison Rules. The committee examined various aspects of institutional framework in the prison with regards to implication of the proposed Jail Manual. The Committee recommended relevant amendments to various sets of existing Rules so as to ensure that the Manual is in conformity with the existing Laws.
 <br><br>
The Government of Goa adopted the Prison Manual framed by the said committee and based on this Manual,pdf  The Goa Prison Rules,2006   were framed, and now, the Prisons in Goa is governed by these Rules.
 <br><br>
Prior to liberation, Central Jail was functioning at Diu and after the liberation, it was shifted to Margao and subsequently, in the year 1968, it was shifted to Aguada Fort that was build during Portuguese regime, thus it is called a Central Jail, Aguada. There was also one Sub Jail at Reis Magos, Bardez functioning in a similar old fort as of Aguada. As these old forts were not designed for housing prisoners in a high security environment, the Sub Jail Reis Magos was closed in the year 1993 and was merged with Central Jail Aguada. Thereafter, having constructed a new building at Sada Vasco, the sub Jail started functioning in the said new building since January, 1996. Besides said Jails there were three Lock-ups, one at Margao, Panaji & Mapusa. The structure of these lock-ups were also constructed during pre-liberation time. However, the same were renovated from time to time to have smooth functioning. Subsequently, Judicial lock-up, Panaji and Margao were closed from security point of view as many escapes had been taken place from both these lock-ups due to lack of adequate security.
 <br>
 <br>
Considering the fact that lock-ups and Jails in Goa were not secure for lodging prisoner and the fact that these institutions have been overcrowded and the present Central Jail, Aguada has inadequate infrastructure, the Government decided to construct Modern Central Jail at Colvale, Bardez Goa and the construction of this Jail is underway and is in progress and nearing completion.
 <br><br>
On 28/11/2012 the cabinet resolved to approve for creation of a new Inspectorate General of Prisons to be headed by Inspector General of Prisons appointed u/s 5 of Prison Act, 1894 and to function as Head of Department in the newly created Department.
 <br><br>
The cabinet further resolved to approve that :<br>
 a) The Head of Department shall be the appointing and disciplinary authority for the newly created directorate and shall also be duly designated with powers as stated in the Goa delegation of Financial Powers Rules, 2008.<br>
 b) To amend the Business of Government of Goa (Allocation) Rules, 1987 so as to specify the newly created Department in the scheldule attached thereto.<br>
 c) The newly created Inspectorate General of Prisons will be temporarily operated by the staff from the Collectorate, (North) till the posts are created and filled on regular basis in the Inspectorate General of Prisons on  approval of Administrative Reforms Department and concurrence of the Finance Department.
 <br><br>
The Cabinet also resolved on 06/12/2012 to approve that:<br>
a) Making Central Jail Aguada into an exclusive womens prison after some renovations in the building.<br>
b) Housing young male offenders (age group between 18-21 years) at the present Mapusa Judicial Lock-up after renovation and notification as Sub; Jail. After the completion of age limit, prisoners will be shifted to Sub Jail Sada, Vasco or Colvale Jail as per the guidelines.<br>
c) In colvale Jail separate enclosures meant for women and men prisoner be utilized for housing convicts and under-trials male prisoners separately.<br>
d) Sub Jail Sada, Vasco may be converted primarily as Prison for housing under-trials (age group above 21 years).<br>
e) Exploring the possibility of allowing Prison Department to use two acres of land at curca for setting up of Prison Department and State Prison Training Centre and rest of the land; for Open Prison/half way home in future provided the Goa Housing Board is adequately compensated.<br>
f) The requisite staff, office equipments and logistic would be sanctioned subsequently in pursuance to above decision.<br>
 <br>
The Government of Goa is committed to create a conducive environment in its prisons for rehabilitation, reformation and social re-integration of the prisoners.  

	   <?php
              $i=1;
              while($fetch=mysql_fetch_array($exe))
               {
       ?>
	 <table>
	  <tr><?php echo $fetch['heading'];?></tr><br>
	 
	  <tr><?php echo  $fetch['desc'];?></tr>
       <br>
	   <br>   
	 </table>
	 
	 <?php
	    $i++;
		}
	 ?>
	 	
		</div>
		  
		  

  </div>
	
	   
	   
    
  </body>
  
</html>
