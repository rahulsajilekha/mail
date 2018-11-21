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
	a{text-decoration: none}
	a:hover{ background-color:#fcff26}
	#atop{margin-left:50}
	img{
		vertical-align: middle;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        }

</style>
</head>

<?php 
error_reporting(0);
include('ads/header.php');?>


<body>

<table width="1430" align="center" style="background-image:url('theme/<?php
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
    <td height="175" colspan="3" align="center" style="background-image:url(newimage/box.png);">
	<div  style="float:left;margin-left:30px;">
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
?></div>
	
	 <div style=" font-family:Verdana;float:left;margin-left:300px;padding-top:40px;font-size:70px;text-align:center;color:#333333"> 
<?php $converter = new Encryption; ?>
	 	Welcome <?php  echo $converter->decode($_SESSION['sid']); ?> 
	 </div>
 	  </td>
  </tr>
  <tr>

         
        <td height="70" colspan="3" style="background-color:rgba(153,153,255,0.5);">
		<a style="margin-left:50px"  href="HomePage.php?chk=chngthm"><img  src="newimage/ct.png" height="75" width="200"></a>
		<a style="margin-left:50px"  href="HomePage.php?chk=chngPass"><img  src="newimage/cp.png" height="75" width="200"></a>
		
		<a style="margin-left:50px" href="HomePage.php?chk=vprofile"><img  src="newimage/ep.png" height="75" width="200"></a>
		
		<a style="margin-left:50px" href="HomePage.php?chk=updnews"><img  src="newimage/un.png" height="75" width="200"></a>
		<a style="margin-left:50px" href="HomePage.php?chk=logout"><img  src="newimage/lo.png" height="75" width="200"></a></td>
  
  </tr>
  <tr>
    <td width="158" height="550" valign="top" align="center" style="background-color:rgba(250,250,250,0.5);">
	<div style="margin-top:50px"><a href="HomePage.php?chk=compose"><img src="newimage/2.png" height="60" width="130"/></a><br/><br/>
	<a href="HomePage.php?chk=inbox"><img src="newimage/1.png" height="60" width="130"/></a><br/><br/>
	<a href="HomePage.php?chk=sent"><img src="newimage/3.png" height="60" width="130"/></a><br/><br/>
	<a href="HomePage.php?chk=trash"><img src="newimage/4.png" height="60" width="130"/></a><br/><br/>
	<a href="HomePage.php?chk=draft"><img src="newimage/5.png" height="60" width="130"/></a>
	
	</div>
	</td>
    <td width="795" height="550" valign="top" align="center" style="background-color:rgba(240,240,240,0.5);">
	<div style="width:795; height:550">		
			
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