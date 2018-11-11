
<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>

		
</head>

<body>
<?php 
<table width="1430"   align="center" >
  <tr >
    <td height="250"  width="1430" colspan="2" >
	
	<img src="" height="" width="" />
	
		</td>
  </tr>
  <tr >
    <td height="100"  width="1430"   valign="top"  colspan="3" style="background-image: url(newimage/s3.png);">
    <ul>
		<li><a href="index.php"> <img src="newimage/home.gif" height="60px" width="200px" /> </a> </li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	<li>	<a href="index.php?chk=about"> <img src="newimage/ab.gif" height="60px" width="200px" /> </a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		<li><a href="index.php?chk=registraion"> <img  src="newimage/new.gif" height="60px" width="200px" />  </a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		
		<li><a href="index.php?chk=contact"> <img  src="newimage/cont.gif" height="60px" width="200px" />  </a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li><a href="index.php?chk=admin"> <img   src="newimage/adminbtn.gif" height="60px" width="200px" />  </a></li></ul>	</td>
  </tr>
  <tr>
    
	
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
	
    <td width="330" align="center">
	<marquee direction="up" behavior="scroll" height="400" onmouseover="stop()" onmouseout="start()">
	<?php
	include_once('latestupdDisp.php');
	?>
	</marquee>
	</td>
  </tr>
</table>
<?php include('ads/header.php');?>
</body>
</html>
