
<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.column {
    float: left;
    width: 65%;
    padding: 10px;
    height: 100%;
   
}
.column1 {
    float: left;
    width: 35%;
    padding-left: 80px;
    height: 100%;
   
}
.row:after {
    content: "";
    display: table;
    clear: both;
    padding: 10px
}

</style>
		
</head>

<body>
	<div class="header">
  <h1>Header</h1>
</div>

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="index.php?chk=about">ABOUT US</a>
  <a href="index.php?chk=registraion">NEW USER</a>
  <a href="index.php?chk=contact">CONTACT US</a>
  <a href="index.php?chk=admin">ADMIN</a>
</div >

   <div class="row" align="center">
   <div class="column" style="background-color:#ffffff;">
	<?php

	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	 echo"<td height='400' width='30'>&nbsp;</td>";
     echo"<td height='400' width='1100' valign='center' background='newimage/Design.png'>";
     include_once('login.php');
	  echo"</td>";
	}
	
	if($chk=="registraion")
	{
	echo"<td height='400' width='1100' bordercolor='#2A3F00' valign='top' >";
	include_once('regis.php');
    echo"</td>"; 
    }
	 
	if($chk==5)
	{
	echo"<td height='400'  bordercolor='#2A3F00' valign='top' >";
	include_once('welcome.php');
    echo"</td>"; 
    }
	
	if($chk=="about")
	{
	echo"<td height='400' width='1100' bordercolor='#2A3F00' valign='top' >";
	include_once('aboutus.php');
    echo"</td>"; 
	}
	
	if($chk=="contact")
	{
	echo"<td height='400' width='1100' bordercolor='#2A3F00' valign='top' >";
	include_once('contactus.php');
    echo"</td>"; 
	}
	if($chk=="admin")
	{
	echo"<td height='400' width='1100' bordercolor='#2A3F00' valign='top' >";
	include_once('adminlogin.php');
    echo"</td>"; 
    }
	?>	
	</div>
   <div class="column1" style="background-color:#bbb;">
	<marquee direction="up" behavior="scroll" height="400" onmouseover="stop()" onmouseout="start()">
	<?php
	include_once('latestupdDisp.php');
	?>
	</marquee>
	</div>
</div>
</body>
</html>
