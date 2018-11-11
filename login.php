<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	.ca {
		padding-top: 100px;
	}
	.fa {
    background-color:  #b3b3ff;
    border: none;
    color: white;
    padding: 5px 7px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    }

.fa:hover {
    background-color: #b3ffe6;
    }
	</style>
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
<div id=login class=ca>

  <input type="text" id="id" name="id" placeholder="USERNAME"></br>
  
  <input type="text" id="pwd" name="pwd" placeholder="PASSWORD">
  
  	<button class="fa" type="submit" value="SignIn" name="signIn">Login</button>
    <a href="index.php?chk=registraion"><button class="fa" type="button" class="btn btn-warning">SignUp</button></a>
 </div>  
</form>
</body>
