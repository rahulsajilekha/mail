<?php
include_once('connection.php');

$file=$_FILES['file1']['name'];

$id=$_SESSION['sid'];

if(@$_REQUEST['upd'])
{
	if($_POST['title']=="" || $_POST['cont']=="" )
	{
	$err= "fill the related data first";
	}
	
	else
	{$err="INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())";
		mysql_query("INSERT INTO latestupd values('','{$_POST['title']}','{$_POST['cont']}','$file',sysdate())");
		
		move_uploaded_file($_FILES["file1"]["tmp_name"], "latestUpdates/" . $_FILES["file1"]["name"]);
		$err= "updated latest news...";
	}
	
}	
	
?>
<head>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data" >
<table height="100"></table>
<table width="600" style="background-color:rgba(250,250,250,0.5);"  ><tr height="30"></tr>
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">Title</th>
    <td width="277">
	<input type="text" name="title"  required/>	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Contents</th>
    <td><textarea rows="10" name="cont" cols="30" required></textarea></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" name="file1" id="file"/></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="reset" value="RESET"/>
	<input type="submit" name="upd" value="UPDATE"/></th>
  </tr>
</table>

</body>
</form>
</html>
