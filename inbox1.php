<h1 align="center" style="font-family:Verdana;">Inbox</h1>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where rec_id='$id'";
$dd=mysql_query($sql);
echo "<div style='margin-left:10px;font-family:Verdana;'>";
		echo "<form action='delete_msg.php' method='post'>";

	echo "<table width='1200'>";

	echo "<tr><td><input type='submit' value='Delete' name='delete'/></td></tr>";

while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr height='50' colspan='4' style='background-color:rgba(150,150,150,0.5);'>";
	echo "<td width='100'><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='HomePage.php?coninb=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
		echo"</form>"

	
	


?>
<!--<input type='submit' value='Delete' name='delete'/>-->
</div>


