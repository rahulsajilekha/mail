<?php
include_once('library/enAde.php');

session_start();
if($_SESSION['sid']=="")
{
header('Location:index.php');
}
$id=$_SESSION['sid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
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
    border-radius: 10px;
    box-shadow: 5px 5px 24px grey;
    
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color:  #f2f2f2;
    text-align: center;
    font-size: 14px;
    font-family: verdana;
    font-style: bold;
    padding: 20px;
    text-decoration: none;

}
.sidenav {
    overflow: hidden;
    background-color:rgba(51,51,51,0.5);
    width:100%;
    border: 25px;
    height: 700px;
    padding-top: 40px;
    border-radius: 10px;
    box-shadow: 5px 5px 24px grey;
}
.sidenav a {
    float: left;
    display: block;
    color:   white;
    text-align: center;
    font-size: 14px;
    font-family: verdana;
    font-style: bold;
    padding: 40px;
    text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;

}
.sidenav a:hover {
    font-size: 18px;

}
.column {
    float: left;
    width: 10%;
    padding: 2px;
    height: 700px;
    border-radius: 20px;

   
}
.column1 {
    float: left;
    width: 75%;
    padding-left: 10px;
    padding-top: 23px;
    padding-bottom: 23px;
    height: 700px;
   
}

.row:after {
    content: "";
    display: table;
    clear: both;
    padding: 10px
}
img{
    border-radius: 50%;
height:60px;
width:60px;

float: right;
}
</style>
</head>

<?php 
error_reporting(0);
include('ads/header.php');?>


<body>

<table width="100%" align="center" style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['conTheme'];
		//echo $conTheme;
		if($conTheme)
		{
			$fo=fopen("userImages/$id/theme","w");
			fwrite($fo,$conTheme);
		}
			@$f=fopen("userImages/$id/theme","r");
			@$fr=fread($f, filesize("userImages/$id/theme"));
			
			echo $fr;

			?>');">
  
  <tr>
    <td >
	<div class="topnav">
	<a href="HomePage.php?chk=chngthm">THEME</a>
    <a href="HomePage.php?chk=chngPass"">PASSWORD EDIT</a>
    <a href="HomePage.php?chk=vprofile">EDIT PROFILE</a>
    <a href="HomePage.php?chk=updnews">POST NEWS</a>
    <a href="HomePage.php?chk=logout">LOGOUT</a>	
	<?php
	include_once('connection.php');
	error_reporting(1);
	
	$chk=$_GET['chk'];
	if($chk=="logout")
	{
	unset($_SESSION['sid']);
	header('Location:index.php');
	}
	$r=mysql_query("select * from userinfo where user_name='{$_SESSION['sid']}'");
	
	$row=mysql_fetch_object($r);
	@$file=$row->image;
	//$id=$row->user_name;
	//echo $file;
	echo "<img alt='image not upload' src='userImages/$id/$file' height='160' width='140' border='3'/>";
?>
<?php $converter = new Encryption; ?>
	 	Welcome <?php  echo $converter->decode($_SESSION['sid']); ?> 
	 </div>
 	<div class="row" align="center" >
    <div class="column" >
    <div class="sidenav">
    <a href="HomePage.php?chk=compose">COMPOSE</a>
	<a href="HomePage.php?chk=inbox">INBOX</a>
    <a href="HomePage.php?chk=sent"">SENT</a>
    <a href="HomePage.php?chk=trash">TRASH</a>
    <a href="HomePage.php?chk=draft">DRAFTS</a>
	
	</div>
	</div>
	<div class="column1" >	
			
		<?php
		@$id=$_SESSION['sid'];
		@$chk=$_REQUEST['chk'];
		if($chk=="")
			{
			include_once("inbox.php");
			}
			if($chk=="vprofile")
			{
			include_once("newedit.php");
			}
			
			if($chk=="compose")
			{
			include_once('compose.php');
			}
			if($chk=="sent")
			{
			include_once('sent.php');
			}
			if($chk=="trash")
			{
			include_once('trash.php');
			}
			if($chk=="inbox")
			{
			include_once('inbox.php');
			}
			if($chk=="setting")
			{
			include_once('setting.php');
			}
			if($chk=="chngPass")
			{
			include_once('chngPass.php');
			}
			if($chk=="chngthm")
			{
			include_once('chngthm.php');
			}
			if($chk=="draft")
			{
			include_once('draft.php');
			}
			if($chk=="updnews")
			{
			include_once('latestupd.php');
			}
			
		?>
		
		<!--inbox -->
		<?php
		if($chk=="vmsg")
		{	
		$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
			//$sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
            //$dd=mysql_query($sql);
            //echo "1234567890";
			include_once('viewmessage.php');
			}
		}	
			

       if($chk=="vsmsg")
		{	
		$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
			//$sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
            //$dd=mysql_query($sql);
            //echo "1234567890";
			include_once('viewsentmessage.php');
			}
		}	



			




			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		
		$d="DELETE from usermail where mail_id='$v'";
		mysql_query($d);
		}
		echo "msg deleted";
	}
			
		?>
		
		
		
	<!--sent box-->
	<?php
		$id=$_SESSION['sid'];
		@$consent=$_GET['consent'];
			
			if($consent)
			{
			$sql="SELECT * FROM usermail where sen_id='$id' and mail_id='$consent'";
$dd=mysql_query($sql);
			$row=mysql_fetch_object($dd);
			echo "Subject :".$row->sub."<br/>";
			echo "Message :".$row->msg;
			}
			
			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		$d="DELETE from usermail where mail_id='$v'";
		mysql_query($d);
		}
		echo "msg deleted";
	}
			
		?>	
		</div>
	</td>
    <!--<td width="135">&nbsp;</td>-->
  </tr>
  
</table>

</body>
</html>

<?php include('ads/header.php');?>