<h1  style="font-family:Verdana" align="center">Sent</h1>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where sen_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:10px;font-family:'verdana';width:640px;height:auto;border:2px solid red;'>";

	echo "<table  width='1200' valign='top'>";
			echo "<form action='sentdelete.php' method='post'>";

	echo "<tr><td><input type='submit' value='Delete' name='delete'/></td></tr>";

	
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr  height='50' style='background-color:rgba(150,150,150,0.5);'>";
	echo "<form>";
	echo "<td><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$rid."</td>";
	echo "<td><a href='HomePage.php?consent=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
//echo "<input type='submit' value='Delete' name='delete'/>";
echo "</div>";
	
echo "</form>";

?>
