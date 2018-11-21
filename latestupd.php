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
	<head><link rel="stylesheet" href="style.css" />

	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	.dt{
background-color:rgba(51,51,51,0.5);
width: 100%;
height: 100%;
padding: 10px;
border-radius: 25px;  
}
table{
border-radius: 25px;  
}
.bu{
border-radius: 25px;
border-color: red;
background-color: black;
color: white; 
}
.di{ margin: 8px 0;
                        box-sizing: border-box;
                        border: none;
                        border: 2px solid #80ccff;
                        background-color: rgba(255,255,255,0.1);
                        border-radius: 25px;}
	</style>

</head>
<body>
<div class="dt">

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
    <td><textarea rows="10" name="cont" class="di" cols="30"  required></textarea></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" class="bu" name="file1" id="file"/></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="reset" class="bu" value="RESET"/>
	<input type="submit" class="bu" name="upd" value="UPDATE"/></th>
  </tr>
</table>
</div>
</body>
</form>
</html>
