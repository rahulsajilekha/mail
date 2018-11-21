<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>

.f31{
  background-color: #333;
  padding: 20px;
  border-radius: 20px;
  color: white;
  height: 580px;

}
.container1{
	height: 650px;
	width: 100%;
	border: none;
	padding: 60px;
	background-image: linear-gradient(to top, #ebc0fd 0%, #d9ded8 100%);
	 border-radius: 15px;
	 box-shadow: 2px 2px 8px grey;


}
.gh{
background-color: #333;
    color: white;
    border: 3px solid #ff0000;
	border-radius: 20px;
	height: 35px;
	width: 150px;

}
.gh:hover{
	border: 3px solid #4CAF50;
}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body> 
<div class="container1">
<div class="f31">
	<?php
include_once('connection.php');
error_reporting(0);
$id='admin';

$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{		$sql="select * from admindb where user='$id'";
		$d=mysql_query($sql);
		list($a,$c)=mysql_fetch_array($d);
		if($c==$op)
		{

			if($np==$cp)
			{
			$sql="update admindb set password='$np' where user='$id'";
		$d=mysql_query($sql);
		echo "pass updated...";
			}
			
			else if($np!=$cp)
			{
			echo "new pass doesn't match to confirm pass";
			}
			}
		
		else
		{
		echo "wrong old password";
		}
	}
		
}
?>
<body>
<form method="post">
<table height="100"></table>

<table width="500" style="font_family=arial">
  <tr>
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
<tr>
    <td colspan="2" align="center">
	<input type="submit" class="gh" name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</form>
</body>
</div>
</div>
</body>
</html>
