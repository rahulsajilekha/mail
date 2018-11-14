
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
    height: 60px;
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
    padding: 20px;
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
  <a href="adminhome.php?chk=approve">Approve</a>
  <a href="adminhome.php?chk=remove">Remove</a>
  <a href="adminhome.php?chk=suspend">Suspended</a>
  <a href="adminhome.php?chk=sendm">Compose</a>
  <a href="adminhome.php?chk=viewm">Inbox</a>
  <a href="adminhome.php?chk=pass">Change password</a>
  <a href="index.php">Logout</a>
</div >

   <div class="row" align="center" style="background-image: linear-gradient(to bottom right, #cfd9df, #e2ebf0);">
   <div class="column" >
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
   
</div>
</body>
</html>
