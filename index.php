
<?php session_start();
error_reporting(1);
 ?>

<html >
<head>
<link rel="stylesheet" href="style.css" />


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
	 
     include_once('login.php');
	
	}
	
	if($chk=="registraion")
	{
	
	include_once('regis.php');
    }
	 
	if($chk==5)
	{
	include_once('welcome.php');
    }
	
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	
	if($chk=="contact")
	{
	include_once('contactus.php');
	}
	if($chk=="admin")
	{
	include_once('adminlogin.php');
    }
	?>	
	</div>
   <div class="column1">
    <div class="column3">
	<marquee padding="10px" direction="down" behavior="scroll" height="550px" onmouseover="stop()" onmouseout="start()">
	<?php
	include_once('latestupdDisp.php');
	?>
	</marquee>
</div>
	</div>
</div>
</body>
</html>
