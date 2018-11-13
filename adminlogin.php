<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	.ca {
		padding: 35px;
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
	background-color: #333;
   box-shadow: 0px 2px 4px grey;

	 padding: 130px;
	 height: 100%;
	 border-radius: 10px;

	 


} 
.flip-card {
  background-color: transparent;
  width: 500px;
  height: 350px;
  perspective: 1000px;
  border-radius: 25px;

}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height:100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: transparent;
  color: black;
  z-index: 2;
}  

.flip-card-back {
background-color: #333;
   transform: rotateY(180deg);
  z-index: 1;
  border-radius: 25px;

} 
p{
  font-family: verdana;
  color: white;
  font-size: 20px;

}
input{
  color: white;

}
	</style>
 </head>

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






<body>
 
 
<form method="post" action="">
<div id=login class=ca>
<div class=pa >	


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="admin2.png" alt="Avatar" style="width:350px;height:350px;">
    </div>
    <div class="flip-card-back">
<form method="post" action="">
<center>
  <p>  Admin Username</p>
  
		<input type="text" name="id" />
  
 
 <p> Admin Password</p>
  
  
  <input type="password" name="pwd"  /><br/>

	   <button class="fa" type="submit" value="SignIn" name="signIn">Login</button>

	</center>
</form>
</div>
</div>
 </div>
	





</div>
 </div>  
</form>
</body>
