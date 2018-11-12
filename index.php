
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
    height: 80px;
    border: 25px;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color:  #f2f2f2;
    text-align: center;
    font-size: 20px;
    font-family: verdana;
    font-style: bold;
    padding: 30px 30px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.column {
    float: left;
    width: 75%;
    padding: 10px;
    height: 100%;

   
}
.column1 {
    float: left;
    width: 25%;
    padding-left: 10px;
    padding-top: 23px;
    padding-bottom: 23px;
    
   
}
.column3{
  height: 600px;
  background-image: linear-gradient(to top, #09203f 0%, #537895 100%); 
    box-shadow: 2px 2px 8px grey;
    border-radius: 10px;
    padding: 20px;


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
	

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="index.php?chk=about">ABOUT US</a>
  <a href="index.php?chk=registraion">NEW USER</a>
  <a href="index.php?chk=contact">CONTACT US</a>
  <a href="index.php?chk=admin">ADMIN</a>
</div >

   <div class="row" align="center" style="background-image: linear-gradient(to bottom right, #cfd9df, #e2ebf0);">
   <div class="column" >
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
   <div class="column1">
    <div class="column3">
	<marquee padding="10px" direction="up" behavior="scroll" height="550px" onmouseover="stop()" onmouseout="start()">
	<?php
	include_once('latestupdDisp.php');
	?>
	</marquee>
</div>
	</div>
</div>
</body>
</html>
