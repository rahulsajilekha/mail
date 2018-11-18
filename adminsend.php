 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
@$to=$converter->encode($_POST['to']);
@$sub=$converter->encode($_POST['sub']);
@$msg=$converter->encode($_POST['msg']);
@$cc=$converter->encode($_POST['cc']);
@$id='admin';
@$id=$converter->encode($id);

if($to=="" || $sub=="" || $msg=="")
  {
  $err= "fill the related data first";
  }

  else
{
$sql="INSERT INTO usermail values('','$to','$id','$sub','$msg','$file',sysdate())";
$pql="INSERT INTO usermail values('','$cc','$id','$sub','$msg','$file',sysdate())";

$r=mysql_query($sql);
if ($cc!='') 
     {
       $r=mysql_query($pql);
     }
}

?>
<form method="post">
<table height="60"></table>

<table width="506" style="font-family:verdana;background-color:rgba(255,255,255,0.5);">
  <tr height="15"><td></td><td></td><td></td></tr>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to" />	</td><td width="100"></td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" name="cc"/></td><td width="100"></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td><td width="100"></td>
  </tr>
  <tr>
    <th height="52" scope="row">Msg</th>
    <td><textarea rows="8" cols="40" name="msg"></textarea></td><td width="100"></td>
  </tr><tr><td></td><td align="left">
  	<input type="submit" name="send" value="Send"/></td><td width="100"></td></tr></table>
</form>>
</body>
</html>
