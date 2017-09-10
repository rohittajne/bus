<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Records</title>
  <link rel="stylesheet" href="joomla_45560_data/template.css" type="text/css">
  <link rel="stylesheet" href="joomla_45560_data/superfish.css" type="text/css">

</head>

<body>

      
<div id="navigation-row">         
                  <p>&nbsp;</p>
</div> 
      <br />
      
<div id="header-row">
        <div class="row-container">
          <div class="container">
            <header>
              <div class="row">
                  <!-- Logo -->
                  <div id="logo" class="span12">
                  <h1> Bus Managemant System </h1>
                  </div>
                  
              </div>
            </header>
          </div>
        </div>
      </div>  
<div id="navigation-row">
      </div>
      <div id="body"><br />
<br />
    <form id="form1" name="form1" method="post" onsubmit="return Checkfiles()" enctype="multipart/form-data">
      <table width="500" height="410" border="0" align="center" bordercolor="#000000">
            <tr>
              <td width="500" ><table width="500" height="455" border="0" align="center">
                  <tr>
                    <td colspan="2"><div align="center" class="style15"><h2>Registration Form</h2> </div></td>
                  </tr>
                  <tr>
                    <td ><strong>Bus No. :- </strong></td>
                    <td><input name="busno" type="text" placeholder="Enter Bus No"/> <?php
					if($_POST["capacity"]=="" && $_POST["Submit"]!="")
					{
					?>	                    <span class="style22">Bus Number cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
                  <tr>
                    <td width="128" ><strong>Capacity :-</strong></td>
                    <td width="326"><input name="capacity" type="text" placeholder="Enter bus capacity"/>
					<?php
					if($_POST["capacity"]=="" && $_POST["Submit"]!="")
					{
					?>	                    <span class="style22">Capacity field cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
					
                  <tr>
                    <td><strong>Route Name:-</strong></td>
                    <td><strong>
                      <label>
                      <input name="route" type="text" id="en" placeholder="Enter Route name"/>
                        </label>
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong>Source :-</strong></td>
                    <td><strong>
                      <input name="source" type="text" id="en2" placeholder="Enter Source"/>
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong>Deistination :-</strong></td>
                    <td><strong>
                      <input name="dest" type="text" id="en3" placeholder="Enter Destination"/>
                    </strong></td>
                  </tr>
                  <tr>
                    <td ><strong>Name of Driver:-</strong></td>
                    <td><strong>
                      <input name="driver" type="text" id="en4" placeholder="Enter Driver name"/>
                      
                    </strong><?php
					if($_POST["driver"]=="" && $_POST["Submit"]!="")
					{
					?>	                    <span class="style22">Name cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
                  </tr>
                  <tr>
                    <td ><strong> Depot :- </strong></td>
                    <td><strong>
                      <label>
                      <textarea class="text" name="add" id="add" placeholder="Enter Depot"></textarea>
                        </label>
                    </strong> </td>
                  </tr>
                 
                  <tr>
                    <td height="134" colspan="2"><div align="center">
                        <label>
                        <input type="submit" name="Submit" value="Register" />
                        </label>
                    </div>
                      <div align="center">
                        <div align="center"><span class="style19">
                          <?php

if($_POST["Submit"]!="")
{
//print_r($_POST);
$error=0;
$bno=$_POST["busno"];
$nm=$_POST["driver"];
$cap=$_POST["capacity"];
$route=$_POST["route"];
$source=$_POST["source"];
$dest=$_POST["dest"];
$add=$_POST["add"];
$m=new MongoClient();
$db=$m->bms;

$collection = $db->bmsreg;

if($error==0)
{
$document = array( 
"BusNo" => "$bno",
"Capacity" => "$cap", 
"Dname" => "$nm", 
"Source" => "$source", 
"Destination" => "$dest", 
"RouteName" => "$route", 
"address" => "$add", 
);
$collection->insert($document);

}
}
?>
                      </div></td>
                  </tr>
              </table></td>
            </tr>
      </table>
          </form>
</div>
<div id="navigation-row">
      </div>
<div id="footer">         
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
      </div> 

</body>
</html>
