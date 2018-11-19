<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
error_reporting(1);
$sid=$_SESSION['sid'];
$mob=$_POST['mob'];
$mail=$_POST['eid'];
$addr=$_POST['addr'];
$mob = $converter->encode($mob);
$mail = $converter->encode($mail);
$addr = $converter->encode($addr);

$imgpath=$_FILES['file']['name'];
if($_POST['reg1'])
{
	$r=mysql_query("SELECT * FROM userinfo where user_name='$sid'");
	$t=mysql_num_rows($r);
     mysql_query("update userinfo set mobile='$mob' where user_name='$sid'");
     echo "<script>alert('Mobile NO updated');window.location='Homepage.php?chk=vprofile'</script>";
}

if($_POST['reg2'])
{
	$r=mysql_query("SELECT * FROM userinfo where user_name='$sid'");
	$t=mysql_num_rows($r);
     mysql_query("update userinfo set email='$mail' where user_name='$sid'");
     echo "<script>alert('E mail updated');window.location='Homepage.php?chk=vprofile'</script>";
}


if($_POST['reg3'])
{
	$r=mysql_query("SELECT * FROM userinfo where user_name='$sid'");
	$t=mysql_num_rows($r);
     mysql_query("update userinfo set address='$addr' where user_name='$sid'");
     echo "<script>alert('Address updated');window.location='Homepage.php?chk=vprofile'</script>";
}

if($_POST['reg4'])
{		
        $r=mysql_query("SELECT * FROM userinfo where user_name='$sid'");
	    $t=mysql_num_rows($r);
        mysql_query("update userinfo set image='$imgpath' where user_name='$sid'");

        mkdir("userImages/$sid");
		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$sid/" . $_FILES["file"]["name"]);
		$_SESSION['sname']=$_POST['sid'];
		 echo "<script>alert('Photo updated');window.location='Homepage.php?chk=vprofile'</script>";

}
?>

<form method="post" enctype="multipart/form-data">
<table height="100"></table>>
<table width="90%"   align="center" style="background-color:rgba(250,250,250,0.5);" >
 <tr height="50"></tr>
  <tr><td width="40"></td>

    <td height="47">Edit Your Mobile </td>
    <td><input type="text" name="mob"/></td><td><input type="submit" name="reg1" value="EDIT"/></td>
  </tr>
  <tr><td width="40"></td>
    <td height="39">Edit Your Email </td>
    <td><input type="email" name="eid"/></td><td><input type="submit" name="reg2" value="EDIT"/></td>
  </tr>
  <tr><td width="40"></td>
    <td height="41">Edit Your Address </td>	
    <td>
	    <input type="text" name="addr"/>
	
	</td><td>	<input type="submit" name="reg3" value="EDIT"/></td>
  </tr>
  <tr><td width="40"></td>
    <td height="55">Edit Your Pic</td>
    <td>
	<input type="file" name="file"/>
	</td><td>	<input type="submit" name="reg4" value="EDIT"/></td>

  </tr>
  </table>
  </form>
