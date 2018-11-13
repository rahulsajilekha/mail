<link rel="stylesheet" href="style2.css" />
 
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
	$d=mysql_query("SELECT * FROM admindb where user='{$_POST['id']}'");
	$row=mysql_fetch_object($d);
		$fid=$row->user;
		$fpass=$row->password;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		//header('location:HomePage.php');
		echo "<script>window.location='adminhome.php'</script>";
		}
		else
		{
		$err="invalid id or pass";
		}
	}
}
?>
<form method="post" action="">
<table width="40%"    align="center"  style="font-family:Verdana"  >
<div id=login>

  	<tr height="30"><td width="10"></td>
		<td > <font color="#FF0000"> <?php echo @$err; ?></font></td>
	</tr>

  <tr><td width="10"></td><td style="font-size:20px">
    Admin Username
  </td></tr>
  <tr><td width="10"></td><td>
  
		<input type="text" name="id" />
  </td></tr><tr height="10"></tr>
   <tr><td width="10"></td><td style="font-size:20px"> 
 
  Admin Password
  </td></tr>
  <tr><td width="10"></td><td>
  
  <input type="password" name="pwd" width="500"/><br/>
  </td></tr><tr height="10"><td></td><td></td></tr>
  <tr><td width="10"></td><td>	
    
	<input type="submit" style="background-src: 'newimage/abcd.png'" width="80" height="40" value="SignIn" name="signIn" />
	
	</td>
  </tr>
  <tr height="15"></tr>
  </div>
</table>
</form>
