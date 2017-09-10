<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Remove Records</title>
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
                  <h1> Bus Management System </h1>
                  </div>
                  
              </div>
            </header>
          </div>
        </div>
      </div>  
<div id="navigation-row">
      </div>
      <div id="body">
      <br />
<h3>Enter Bus No.:- </h3>
<form id="f" name="f" method="post" action="">
  <p>
    <label for="busno"></label>
    <input type="text" name="busno" id="enroll" placeholder="Bus No."/>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
  </p>
  <?php if(isset($_POST['submit'])){
	  $busno=$_POST['busno'];
	  
$m=new MongoClient();
try{
$db=$m->bms;
$collection = $db->bmsreg;

$arr=array('BusNo'=>$busno);


$r=$collection->remove($arr);
var_dump($r);
echo "<br /><br />Record Deleted...";
$m->close();
}

catch(MongoException $m)
{
echo $m;
exit;
}
}

?>

      <br />
</div>
<div id="navigation-row">
      </div>
<div id="footer">         
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
      </div> 

</body>
</html>
