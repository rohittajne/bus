﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bus Management System</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="slider">
	
    <div id="templatemo_sidebar">
    	<div id="templatemo_header">
		<h2> Bus <br /> Management System </h2>
        	
        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
            <li><a href="#gallery">Login<span class="ui_icon gallery"></span></a></li>
            <li><a href="#services">Search<span class="ui_icon services"></span></a></li>
	    <li><a href="#aboutus">About Us<span class="ui_icon aboutus"></span></a></li>
            <li><a href="#contactus">Contact Us<span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<ul id="social_box">
            <li><a href="http://www.facebook.com/"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="http://www.twitter.com/"><img src="images/twitter.png" alt="twitter" /></a></li>
            <li><a href="http://www.linkedin.com/"><img src="images/linkedin.png" alt="linkin" /></a></li>
            <li><a href="http://www.blogger.com/"><img src="images/technorati.png" alt="technorati" /></a></li>
            <li><a href="http://www.myspace.com/"><img src="images/myspace.png" alt="myspace" /></a></li>                
        </ul>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <h1>Introducing Bus Management System</h1>    
                        <div class="image_wrapper image_fl"><img src="images/templatemo_image_01.jpg" alt="image" height="212" /></div>
                        <p><em>The bus management system project is truely only for all  persons who travels with the bus and the depot managers who </em>manages all the bus operated by the City corporation. </p>
                        <p>The bus management system provide flexibility and reliablity for the passangers who tavels with the bus regularly for finding the bus, see the schedules, etc. And for the depot managers who heartly manages the buses who travels whole city daily. For best scheduling of bus and the bus drivers are also managed by this system.</p>
                      <div class="cleaner_h40"></div>
                        
                      
                        <div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
                    </div> <!-- end of home -->
				    
                    <div class="panel" id="services">
        
<form name="f" method="post">
<h3> Enter Bus No. To Search:-</h3>
<input type="text" name="enroll" placeholder="Bus No." />
<input type="submit" name="search" value="search" />
<input type="submit" name="disp" value="Display All" />
<table align="center">
<tr>
<th>Bus Number </th>
<th>Source </th>
<th>Destination </th>
<th>Depot </th>
</tr>

<?php
$db = new Mongo();
if(isset($_POST['search'])){
$enroll=$_POST['enroll'];
$query = $db->bms->bmsreg->find(array('BusNo'=> $enroll));

foreach ( $query as $current )
{
echo '<tr>';
echo '<td>'.$current['BusNo'].'</td>';
echo '<td>'.$current['Source'].'</td>';
echo '<td>'.$current['Destination'].'</td>';
echo '<td>'.$current['address'].'</td>';
echo '</tr>';
}
}
if(isset($_POST['disp'])){

$query = $db->bms->bmsreg->find();

foreach ( $query as $current )
{
echo '<tr>';
echo '<td>'.$current['BusNo'].'</td>';
echo '<td>'.$current['Source'].'</td>';
echo '<td>'.$current['Destination'].'</td>';
echo '<td>'.$current['address'].'</td>';
echo '</tr>';
}
}
?>
</table>
<br />
</form>        </div>
                


				
                    <div class="panel" id="gallery">
                        <h1>Login Here:</h1>
                        
                        <div id="gallery_container">
                           	
                                     <form id="form1" name="form1" method="post" action="">
<table width="462" height="300" border="0" align="center">
        <tr>
          <td align="center" valign="middle"><h2> Login </h2>
        
              <p>
               
                <input type="username" name="uname" placeholder="User Name"/>
              </p>
              <p>
              
                <input type="password" name="upass" placeholder="Password"/>
              </p>
              
              <input type="submit" name="login" value="Submit" />
              
              	<?php
	

if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pass=$_POST['upass'];
	
	
	
		if($uname=="Admin" && $pass=="@dmin")
		{
			//Go to admin page ?>
<script type="text/javascript">
			window.location="admin.html"
</script><?php
		}
		
		else
		{
			echo "<script type=text/javascript>";
			echo "alert('Login Unsuccessful')";
			echo "</script>";
		}
		
		
}

?>
               </td>
        </tr>
</table>     </form>
 
                                
                                </div>
                        </div>
              				
                    <div class="panel" id="aboutus">
                        <h1>About Us</h1>
                    	<div class="image_wrapper image_fl"><img src="images/templatemo_image_02.jpg" alt="image" height="150" /></div>
                        <p>Bus Management System  is an integrated electronic management system. This system ensure that the  management process of this can company are smoothly done. This system will also  help in decreasing error mostly cause by human mistake. This system was developed  as one of the solution to transfer from current manual practices to a more  systematic computerized system. This system will be developed by using PHP and MongoDB.  Briefly there are two main modules for this system. The first module will be  the Driver Management module and the second module will be Bus Management  Module. However this thesis will just describe about Bus Management Module. In  this module, the function that will be developed include, bus registration,  maintenance record, and reminder. For this research, the case study been done  in Transnational Nasik City. </p>
                    </div>
                
  
  
  
  
  
                
                    <div class="panel" id="contactus">
                        <h1>Feel free to send us a message</h1>
                        <div id="contact_form">
                            <form method="post" name="contact" action="#contactus">
                                
                                <label for="author">Your Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                <div class="cleaner_h10"></div>
                                
                                <input type="submit" class="submit_btn" name="send" id="submit" value="Send" />
							<?php
if(isset($_POST["send"]))
{

$m=new Mongo();
$db=$m->bms;

$collection = $db->feedback;

$name=$_POST['author'];
$email=$_POST['email'];
$comment=$_POST['text'];

$document = array( 
"Name" => "$name",
"Email" => "$email", 
"Comment" => "$comment", 
  
);
$collection->insert($document);
}
?>
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                            </form></p>
						</div>
                    </div>
                
                </div>
			</div>
                 
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        
    
    </div> <!-- end of main -->
</div>
</body>
</html>

