<?php
include_once('connection.php');

$file=$_FILES['file1']['name'];
echo $file;
$id=$_SESSION['sid'];

if(@$_REQUEST['upd'])
{
	if($_POST['title']=="" || $_POST['cont']=="" )
	{
	$err= "fill the related data first";
	}
	
	else
	{$err="INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())";
	echo  $err;echo $_FILES["file"]["name"];
		mysql_query("INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())");
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "latestUpdates/" . $_FILES["file"]["name"]);
		$err= "updated latest news...";
	}
	
}	
	
?>
