<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body> <?php
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

<table width="500" style="background-color:rgba(255,255,255,0.5);font_family=verdana">
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
	<input type="submit" name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</form>
</body>








</body>
</html>
