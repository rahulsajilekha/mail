<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style5.css" />
</head>

<body>
<div class="container1">	

<?php include("connection.php");
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
echo "<script>alert('approved');window.location='adminhome.php'</script>";
}



else
{




$sql="select * from userinfo where vstatus=0";
$r=mysql_query($sql);
while($n=mysql_fetch_array($r))
{
 echo"<table><tr align='top';>       
                  <td width='100'>$n[0]</td>
				  <td>$n[1]</td>
				  <td><a href='admin1.php?u=1&e=$n[0]'/><button>Approve</button></a></td>
				  </tr></table>";


}
}
?>
</div>
</body>
</html>
