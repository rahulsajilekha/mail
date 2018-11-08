<link rel="stylesheet" href="style.css" />
 
 <?php
error_reporting(1);
include_once('connection.php');
if(isset($_POST['signIn']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	$err="fill your id and passwrod first";
	}
	else
	{
	$d=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['id']}'");
	$row=mysql_fetch_object($d);
		$fid=$row->user_name;
		$fpass=$row->password;
		$fstatus=$row->cstatus;
		if($fstatus==1)
		{
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		//header('location:HomePage.php');
		echo "<script>window.location='HomePage.php'</script>";
		}
		else
		{
		$err="invalid id or pass";
		}
		}
		else
		{
		  $err="Account not approved";
		  }
		
		
	}
}
?>
<form method="post">
<table width="40%"   align="left"   style=" background-image:url(newimage/hh.png);"  >
<div id=login>

  	<tr height="30"><td width="10"></td>
		<td > <font color="#FF0000"> <?php echo @$err; ?></font></td>
	</tr>

  <tr><td width="10"></td><td style="font-size:20px">
    Enter  Username
  </td></tr>
  <tr><td width="10"></td><td>
  
		<input type="text" name="id" />
  </td></tr><tr height="10"></tr>
   <tr><td width="10"></td><td style="font-size:20px"> 
 
  Enter  Password
  </td></tr>
  <tr><td width="10"></td><td>
  
  <input type="password" name="pwd"/><br/>
  </td></tr><tr height="10"><td></td><td></td></tr>
  <tr><td width="10"></td><td>	
    
	<input type="image" src="newimage/111.png" width="80" height="40" value="SignIn" name="signIn" />
	<a href="index.php?chk=registraion"><img src="newimage/222.png" width="80" height="40"></a>
	</td>
  </tr>
  <tr height="15"></tr>
  </div>
</table>
</form>