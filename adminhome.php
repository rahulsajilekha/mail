<?php session_start();
error_reporting(1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
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
    width: 100%;
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

<table width="100"  style="background-image: url(newimage/ad.jpg);"   align="center" >
  <tr >
    
  </tr>
  <tr >
    <td height="100"  width="1430"  valign="top" colspan="3"  style="background-image:url(newimage/kk.png)" >
    <ul>
		
	<li>	<a href="adminhome.php?chk=approve"> <img src="newimage/adapp.png" height="60" width="150"> </a></li>
		<li><a href="adminhome.php?chk=remove"> <img src="newimage/adap.png" height="60" width="150">  </a></li>
		
		<li><a href="adminhome.php?chk=suspend"><img src="newimage/sus.png" height="60" width="150"> </a></li>
		<li><a href="adminhome.php?chk=sendm"> <img src="newimage/com.png" height="60" width="150">  </a></li>
		<li><a href="adminhome.php?chk=viewm"> <img src="newimage/mess.png" height="60" width="150"> </a></li>
		<li><a href="adminhome.php?chk=pass"><img src="newimage/pass.png" height="60" width="150"> </a></li>
		<li><a href="index.php"> <img src="newimage/logout.png" height="60" width="150"> </a></li>
		</ul>	</td>
  </tr>
 <tr align="center" valign="top">
  
  <?php

	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	  echo"<td height='400' width='1430' valign='top'>";
	  include_once('admin1.php');
	  echo"</td>";
     }
  if($chk=="approve")
	{
     echo"<td height='400' width='1430' valign='top'>";
     include_once('admin1.php');
	  echo"</td>";
	}
if($chk=="remove")
	{
     echo"<td height='400' width='1430' valign='top' >";
     include_once('admin2.php');
	  echo"</td>";
	}
if($chk=="suspend")
	{
     echo"<td height='400' width='1430'  valign='top'>";
     include_once('admin3.php');
	  echo"</td>";
	}
if($chk=="sendm")
	{
     echo"<td height='400' width='1430' valign='top' >";
     include_once('adminsend.php');
	  echo"</td>";
	}
if($chk=="viewm")
	{
     echo"<td height='400' width='1430' valign='top' >";
     include_once('adminview.php');
	  echo"</td>";
	}
if($chk=="pass")
	{
     echo"<td height='400' width='1430' valign='top' >";
     include_once('adminpass.php');
	  echo"</td>";
	}
?>
</div>
   <div class="column1">
</tr>
  </table>
  	</div>
</div>



</body>
</html>
