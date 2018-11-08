<?php
include_once('connection.php');
error_reporting(1);
$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$dob=$y."-".$m."-".$d;
$ch=$_POST['ch'];
//$hobbies=implode(",",$ch);
$imgpath=$_FILES['file']['name'];
$un=$_POST['un'];
$st1=0;
$st2=0;
if($_POST['reg'])
{
	if($_POST['un']=="" || $_POST['pwd']=="")
	{
	$err="fill your user name first";
	}
	else
	{
	$r=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['un']}'");
	$t=mysql_num_rows($r);
		if($t==1)
		{
		$err="user aleready exists choose another";
		}
		else
		{
		mysql_query("INSERT INTO userinfo values('','{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','{$_POST['addr']}','$dob',
		'$imgpath',$st1,$st2)");
		mkdir("userImages/$un");
		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);
		$_SESSION['sname']=$_POST['un'];
		//header('location:index.php?chk=5');
		echo "<script>window.location='index.php?chk=5'</script>";
		}
	}
}

?>
<form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>">
<table width="90%" border="1" align="center">
  <font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td width="204" height="47">Enter Your User Name </td>
    <td width="218"><input type="text" name="un"/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Password </td>
    <td><input type="password" name="pwd"/></td>
  </tr>
  <tr>

    <td height="47">Enter Your Mobile </td>
    <td><input type="text" name="mob"/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Email </td>
    <td><input type="email" name="eid"/></td>
  </tr>
  <tr>
    <td height="33">Select Your Gender </td>
    <td>
		Male<input type="radio" name="gen" value="m"/>
		Female<input type="radio" name="gen" value="f"/>
	</td>
  </tr>
  <tr>
    <td height="41">Enter Your Address </td>
    <td>
	    <input type="text" name="addr"/>
	
	</td>
  </tr>
  <tr>
    <td height="38">Select Your DOB </td>
    <td>
		<select name="y">
			<option value="">Year</option>
			<?php
			for($i=1900;$i<=2018;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="m">
			<option value="">Month</option>
			<?php
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="d">
			<option value="">Date</option>
			<?php
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td height="55">Upload Your Pics</td>
    <td>
	<input type="file" name="file"/>
	</td>
  </tr>
  <tr>
    <td height="30">I accept term & condition</td>
    <td>
	<input type="checkbox" name="checklist"/>
	</td>
  </tr>
  <tr>
    <td align="center" colspan="2">
	<input type="submit" name="reg" value="Register"/>
	<input type="reset"  value="Reset"/>
	</td>
  </tr>
</table>
</form>