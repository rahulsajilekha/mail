
<html>
<head>
<link rel="stylesheet" href="style.css" />

<style>
.about
    {
    	padding: 60px;
    	
        background-color: #333;
        height: 650px;
        border-radius: 10px;
        box-shadow: 2px 2px 8px grey; 
       color: white;
	}
.ca {
		padding: 20px;
		height: 100%;
	}

.aa{
	background-color: #333;
    color: white;
    border: 3px solid #ff0000;
	border-radius: 20px;
	height: 35px;
	width: 90px;
}
.aa:hover{
    border: 3px solid #4CAF50;
}

.ab{
	background-color: #333;
	opacity: 30%;
    color: white;
    border: 3px solid #ff0000;
	border-radius: 20px;
	height: 35px;
	width: 250px;

}



.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid red;
  color: white;
  background-color: #333;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 10px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

td{color: white;}



</style>
</head>
<body>
<div  class='ca'>
<div class='about'>

<?php
include_once('connection.php');
include_once('library/enAde.php');

error_reporting(1);

$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$dob=$y."-".$m."-".$d;
$ch=$_POST['ch'];
//$hobbies=implode(",",$ch);
$imgpath=$_FILES['file']['name'];
$converter = new Encryption;           
$un = $converter->encode($_POST['un']);
//$un=$_POST['un'];
$st1=0;
$st2=0;
if($_POST['reg'])
{
	if($_POST['un']=="" || $_POST['pwd']=="")
	{
	$err="Empty field found";
	}
	else
	{
	$r=mysql_query("SELECT * FROM userinfo where user_name='$un'");
	$t=mysql_num_rows($r);
		if($t==1)
		{
		$err="user aleready exists choose another";
		}
		else
		{
			//$converter = new Encryption;           
			 //$un = $converter->encode($_POST['un']);

            $pwd = $converter->encode($_POST['pwd']);
            $mob = $converter->encode($_POST['mob']);
            $eid = $converter->encode($_POST['eid']);
            $gen = $converter->encode($_POST['gen']);
            $addr = $converter->encode($_POST['addr']);
            $dob = $converter->encode($dob);
           // $imgpath = $converter->encode($imgpath);

		mysql_query("INSERT INTO userinfo values('','$un','$pwd','$mob','$eid','$gen','$addr','$dob',
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
<table width="90%" border="0" align="center">
  <font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td width="204" height="47">Enter Your User Name </td>
    <td width="218"><input type="text" class="ab" name="un"/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Password </td>
    <td><input type="password"  class="ab" name="pwd"/></td>
  </tr>
  <tr>

    <td height="47">Enter Your Mobile </td>
    <td><input type="text"  class="ab" name="mob"/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Email </td>
    <td><input type="email"  class="ab" name="eid"/></td>
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
	    <input type="text"  class="ab" name="addr"/>
	
	</td>
  </tr>
  <tr>
    <td height="38">Select Your DOB </td>
    <td>
		<select class="aa" name="y">
			<option value="">Year</option>
			<?php
			for($i=1940;$i<=2018;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select class="aa" name="m">
			<option value="">Month</option>
			<?php
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select class="aa" name="d">
			<option  value="">Date</option>
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
    	<div class="upload-btn-wrapper">
        <button class="btn">Upload a file</button>
	<input type="file" name="file"/>
</div>
	</td>
  </tr>
  <tr>
   
  </tr>
  <tr>
    <td align="center" colspan="2">
	<input type="submit" name="reg" value="Register" class="aa"/>
	<input type="reset"  value="Reset" class="aa"/>
	</td>
  </tr>
</table>
</form>
</div>
</div>
</body>
</html>