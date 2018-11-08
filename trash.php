<h1 align="center" style="font_family:Verdana">Trash</h1>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM trash where rec_id='$id'";
$dd=mysql_query($sql);

//echo "<div style='margin-left:10px;width:640px;height:auto;border:2px solid red;'>";

	echo "<table width='1200' style='background-color:rgba(150,150,150,0.5);'>";
//	echo "<tr><th>Check </th><th>Sender </th><th>Subject </th><th>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$d)=mysql_fetch_array($dd))
{
	echo "<tr height='50'>";
	echo "<form> <td width='30'></td>";
	//echo "<td><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='HomePage.php?coninb=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	


?>
