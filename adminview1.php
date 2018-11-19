<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table height="60"></table>

<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
$id='admin';
$id=$converter->encode($_POST[$id]);
echo $id;

$sql="SELECT * FROM usermail where rec_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:10px;font-family:Verdana;'>";

	echo "<table width='1200'>";
		echo "<form action='admindelete.php' method='post'>";

	echo "<tr><td><input type='submit' value='Delete' name='delete'/></td><tr>";

	//echo "<tr><th>Check </th><th>Sender </th><th>Subject </th><th>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr height='50' colspan='4' style='background-color:rgba(150,150,150,0.5);'>";
	//echo "<form action='delete_msg.php' method='post'>";//
	echo "<td width='100'><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='HomePage.php?coninb=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	
	


?>
</div></form>
</body>
</html>
