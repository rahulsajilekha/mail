

<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
@$to=$converter->encode($_POST['to']);
@$sub=$converter->encode($_POST['sub']);
@$msg=$converter->encode($_POST['msg']);
@$cc=$converter->encode($_POST['cc']);
$file=$_FILES['file1']['name'];
$filename="upload//".$file;
if($file!="")
{
move_uploaded_file($_FILES['file1']['tmp_name'],$filename);
}
$id=$_SESSION['sid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
	$sql="INSERT INTO usermail values('','$to','$id','$sub','$msg','$file',sysdate())";
    $pql="INSERT INTO usermail values('','$cc','$id','$sub','$msg','$file',sysdate())";

       $r=mysql_query($sql);
          if ($cc!='') {
           $r=mysql_query($pql);
	      }
	  }
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>fill subject and msg first</font>";
	}
	
	else
	{
	$query="INSERT INTO draft values('','$id','$sub','$file','$msg',sysdate())";
	mysql_query($query);
	$err= "message saved...";
	}
}	

	
?>
<head><link rel="stylesheet" href="style.css" />
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
.dt{
background-color:rgba(51,51,51,0.5);
width: 120%;
height: 100%;
padding: 10px;
border-radius: 25px;  
}
table{
border-radius: 25px;  
padding: 10px;
color: white; 
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
<form method="post" enctype="multipart/form-data">
<table width="1100" height="80"></table>
<table width="1100" style="background-color:rgba(150,150,150,0.5);" >
  <?php echo @$err; ?>
  <tr height="30"></tr>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to" />	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" name="cc"/></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" class="bu" name="file1" id="file"/></td>
  </tr>
  <tr>
    <th height="52" scope="row">Msg</th>
    <td><textarea rows="8" class="di" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="submit" class="bu" name="send" value="Send"/>
	<input type="submit" class="bu" name="save" value="Save"/>
	<input type="reset" class="bu" value="Cancel"/>	</th>
  </tr>
</table>
</div>
</body>
</form>
</html>
