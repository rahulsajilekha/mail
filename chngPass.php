<?php
include_once('connection.php');
include_once('library/enAde.php');
error_reporting(1);
$id=$_SESSION['sid'];
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
	{
		$sql="select * from userinfo where user_name ='$id'";
		$d=mysql_query($sql);
		list($a,$b,$c)=mysql_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{

				$converter = new Encryption;
                $np = $converter->encode($np);
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
		echo "wrong old password";
		}
	}
		
}
?>
<body>
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
	<input type="submit" name="chngP" value="Change Password"/></td>
  </tr><tr height="50"></tr>
  
</table>

</form>
</body>
