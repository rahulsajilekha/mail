 <html>
<head>
<link rel="stylesheet" href="style2.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
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
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="user.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
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
    
	<input type="submit"  width="80" height="40" value="SignIn" name="signIn" />
	
	</td>
  </tr>
  <tr height="15"></tr>
  </div>
</table>
</form>
 </div>
  </div>
</div>

</body>
</html>
