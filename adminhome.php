<?php session_start();
error_reporting(1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
S<link rel="stylesheet" href="style.css">

</head>

<body>

<table width="1430"  style="background-image: url(newimage/ad.jpg);"   align="center" >
  <tr >
    <td height="230"  width="1430"   style="background-image:url(newimage/admin.jpg)" >
	
	
	
		</td>
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
</tr>
  </table>



</body>
</html>
