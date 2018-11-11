<!DOCTYPE html>
<html lang="en">
<head>
 </head>
<body>
 
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
<form method="post" action="">
<div id=login>
<label for="id">First Name</label>
  <input type="text" id="id" name="id"></br>
  <label for="pwd">Last Name</label>
  <input type="text" id="pwd" name="pwd">
  
  	<button type="submit" value="SignIn" name="signIn">Login</button>
    <a href="index.php?chk=registraion"><button type="button" class="btn btn-warning">SignUp</button></a>
 </div>  
</form>
</body>
