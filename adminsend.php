 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="style.css" />
  <style>
  .container1{
  height: 650px;
  width: 100%;
  border: none;
  padding: 60px;
  background-image: linear-gradient(to top, #ebc0fd 0%, #d9ded8 100%);
   border-radius: 15px;
   box-shadow: 2px 2px 8px grey;


}

.f31{
  background-color: #333;
  padding: 20px;
  border-radius: 20px;
  color: white;

}
.dr{
   
                        padding: 12px 20px;
                        margin: 8px 0;
                        box-sizing: border-box;
                        border: none;
                        border: 2px solid #80ccff;
                        background-color: rgba(255,255,255,0.1);
                        border-radius: 25px;
                        color: white;
}


.send{
  background-color: #333;
    color: white;
    border: 3px solid #ff0000;
  border-radius: 20px;
  height: 35px;
  width: 90px;
}
.send:hover {
  border: 3px solid green;
}

td{
  padding: 10px;

}
input[type=text]{
  color: white;
}
</style>
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
<div class="container1">
<div class="f31">
<form method="post">
<table height="60"></table>

<table width="506" style="font-family:arial;">
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
    <td><textarea class="dr" rows="8" cols="40" name="msg"></textarea></td><td width="100"></td>
  </tr><tr><td></td><td align="left">
  	<input type="submit" name="send" class="send" value="Send"/></td><td width="100"></td></tr></table>
</form>
</div>
</div>
</body>
</html>
