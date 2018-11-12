<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	.ca {
		padding: 20px;
		height: 100%;
	}
	.fa {
    background-color:  #b3b3ff;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    border-radius: 20px;
    }

.fa:hover {
    background-color: #b3ffe6;
    padding: 12px 16px; 
    }
.pa {
	background-color: #ffffff;
	 padding: 200px;
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
<div class=pa>	
  <i class="fa fa-user-circle" ></i>
  <input type="text" id="id" name="id" placeholder="USERNAME"><br>
  <i class="fa fa-key" aria-hidden="true"></i>
  <input type="password" id="pwd" name="pwd" placeholder="PASSWORD">
  
  	<button class="fa" type="submit" value="SignIn" name="signIn">Login</button>
    <a href="index.php?chk=registraion"><button class="fa" type="button" class="btn btn-warning">SignUp</button></a>
</div>
 </div>  
</form>
</body>
