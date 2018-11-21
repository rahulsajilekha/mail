<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style5.css" />
<style>
.f31{
  background-color: #333;
  padding: 20px;
  border-radius: 20px;
  color: white;
  height: 580px;

}

</style>

</head>

<body>
<div class="container1">
	<div class="f31">
<?php include("connection.php");
include_once('library/enAde.php');
$converter = new Encryption;
error_reporting(0);


$u=@$_GET['u'];
$t=@$_GET['e'];
if($u==1)
{
$sql="update userinfo set cstatus=1,vstatus=1 where user_jd='$t'";
$r=mysql_query($sql);


if(!$r)
{
die('could not update data:'.mysql_error());
}
else
echo "<script>alert('SUSPENSION CANCELLED');window.location='admin3.php'</script>";
}



else
{




$sql="select * from userinfo where vstatus=2";
$r=mysql_query($sql);
while($n=mysql_fetch_array($r))
{
	$n[1] = $converter->decode($n[1]);
 echo"<table><tr align='top' font_family='verdana' style='background-color:rgba(150,150,150,0.5);'>       
                  <td width='100'>$n[0]</td>
				  <td width='300'>$n[1]</td>
				  <td><a href='admin3.php?u=1&e=$n[0]'><button>Revoke</button></a></td >
				  </tr>";


}
}
?></table>



</div>
</div>
</body>
</html>
