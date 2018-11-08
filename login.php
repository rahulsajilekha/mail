<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div class="container" >
<div class="well well-sm">	
    <div class="form-group">
      <label for="id" class="bmd-label-floating">Username:</label>
      <input type="text" class="form-control" id="id" name="id">
    </div>
    <div class="form-group">
      <label for="pwd" class="bmd-label-floating">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd">
    </div>
  
  	<button type="submit" class="btn btn-success" value="SignIn" name="signIn">Login</button>
    <a href="index.php?chk=registraion"><button type="button" class="btn btn-warning">SignUp</button></a>
    </div>
    </div>
  </div>
</form>
</body>
