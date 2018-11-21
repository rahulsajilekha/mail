<?php
error_reporting(0);
session_start();
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
$id="admin";

@$id=$converter->encode($id);

if(isset($_POST['delete'])) 
{
foreach($_POST['ch'] as $v)
{
 echo $v;
$sql=mysql_query("SELECT * FROM usermail where rec_id='$id' and mail_id='$v'");
while($dd=mysql_fetch_array($sql))
	{
	$rec=$dd['rec_id'];
	$sen=$dd['sen_id'];
	$sub=$dd['sub'];
	$msg=$dd['msg'];
	$att=$dd['attachement'];
	
	
	mysql_query("delete FROM usermail where rec_id='$id' and mail_id='$v'");

	}
	
}
echo "<script>alert('msg deleted');window.location='adminhome.php?chk=viewm'</script>";
}
?>