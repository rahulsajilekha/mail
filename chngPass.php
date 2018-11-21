
<html>
<head><link rel="stylesheet" href="style.css" />

<style>
.dt{
background-color:rgba(51,51,51,0.5);
width: 100%;
height: 100%;
padding: 10px;
border-radius: 25px;	
}
.bu{
border-radius: 25px;
border-color: red;
background-color: black;
color: white;	
}
table{
border-radius: 25px;	
}
</style>
</head>


<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
error_reporting(1);
$id=$_SESSION['sid'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$np = $converter->encode($np);
$op = $converter->encode($op);
$cp = $converter->encode($cp);

if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{
		$sql="select * from userinfo where user_name ='$id'";
		$d=mysql_query($sql);
		list($a,$b,$c)=mysql_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{

				
                
			$sql="update userinfo set password='$np' where user_name='$id'";
		$d=mysql_query($sql);
		echo "pass updated...";
			}
			
			else
			{

			echo "new pass doesn't match to confirm pass";
			}
		}
		else
		{
			echo $c;
			echo "</br>";
				echo $cp;
		echo "wrong old password";
		}
	}
		
}
?>
<body>
	<div class="dt">
<form method="post">
<table   height="200" ></table>
<table width="600"  style="background-color:rgba(150,150,150,0.5);font-family:Verdana">
  <tr  height="50"></tr><tr>
  <?php echo $err; ?>
    <th width="173" scope="row">Old Pass </th>
    <td width="176">
		<input type="password" name="op"/>
	</td>
  </tr>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Pass </th>
    <td><input type="password" name="cp"/></td>
  </tr>
  <tr height="40"></tr>
<tr>
    <td colspan="2" align="center">
	<input type="submit" name="chngP" class="bu" value="Change Password"/></td>
  </tr><tr height="50"></tr>
  
</table>

</form>
</div>
</body>
</html>
