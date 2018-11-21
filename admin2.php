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
include_once('library/enAde.php');
$converter = new Encryption;
error_reporting(0);


$u=@$_GET['u'];
$t=@$_GET['e'];
if($u==1)
{
$sql="update userinfo set cstatus=0,vstatus=2 where user_jd='$t'";
$r=mysql_query($sql);


if(!$r)
{
die('could not update data:'.mysql_error());
}
else
echo "<script>alert('PROFILE SUSPENDED');window.location='adminhome.php?chk=remove.php'</script>";
}


if($u==2)
{
$sql="delete  from userinfo where user_jd='$t'";
$r=mysql_query($sql);


if(!$r)
{
die('could not update data:'.mysql_error());
}
else
echo "<script>alert('PROFILE DISMISSED');window.location='admin2.php'</script>";
}



else
{




$sql="select * from userinfo where vstatus=1";
$r=mysql_query($sql);
while($n=mysql_fetch_array($r))
{
		$n[1] = $converter->decode($n[1]);
 echo"<table><tr font_family='verdana'>        
                  <td width='100'>$n[0]</td>
				  <td width='300'>$n[1]</td>
				  <td><a href='admin2.php?u=1&e=$n[0]'><button>Suspend</button></a></td>
				  <td><a href='admin2.php?u=2&e=$n[0]'><button>Dismiss</button></a></td>
				  </tr>";


}
}
?></table>>
  
  
 </div>
</body>
</html>
