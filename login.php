<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('library/enAde.php'); ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	.ca {
		padding: 20px;
		height: 100%;
	}
	.fa {
    background-color:#669999  ;
    border: none;
    color: white;
    height: 50px;
    width: 110px;
    text-align: center;
    font-size: 20px;
    font-family: verdana;
    cursor: pointer;
    border-radius: 30px;
    }

.fa:hover {
    background-color:  #b3b3ff;
    
    }
.pa {
	background-image: url('22.jpg');
	

	 padding: 130px;
	 height: 100%;
	 box-shadow: 0px 2px 4px grey;
	 border-radius: 10px;

	 


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
		$converter = new Encryption;
		$id = $converter->encode($_POST['id']);

	$d=mysql_query("SELECT * FROM userinfo where user_name='$id'");
	$row=mysql_fetch_object($d);
	

	
	$fpass = $converter->decode($row->password);

	$fid = $converter->decode($row->user_name);

	//$fid=$row->user_name;
		//$fpass=$row->password;
	$fstatus=$row->cstatus;
		if($fstatus==1)
		{
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$converter->encode($_POST['id']);
		//header('location:HomePage.php');
		echo "<script>window.location='HomePage.php'</script>";
		}
		elseif ($fid!=$_POST['id'] || $fpass!=$_POST['pwd'])
		{
			echo "invalid username/password";
			//$err="invalid id or pass";
			//cript>alert("Invalid Username/Password");</script>
		
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
<div class=pa >	
	<img src="admin2.png" alt="User" style="width:150px;height:150px;"> </br>
  <input type="text" id="id" name="id" placeholder="USERNAME"/>
  <input type="password" id="pwd" name="pwd" placeholder="PASSWORD"/></br>
  
  	<button class="fa" type="submit" value="SignIn" name="signIn">Login</button>
    <a href="index.php?chk=registraion"><button class="fa" type="button" class="btn btn-warning">SignUp</button></a>
</div>
 </div>  
</form>
</body>
