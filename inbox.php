<h1 align="center" style="font-family:Verdana;">Inbox</h1>
<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;

$id=$_SESSION['sid'];


$sql="SELECT * FROM usermail where rec_id='$id'";
$dd=mysql_query($sql);

echo "<div style='margin-left:10px;font-family:Verdana;'>";

	echo "<table width='1200'>";
		echo "<form action='delete_msg.php' method='post'>";

	echo "<tr><td><input type='submit' value='Delete' name='delete'/></td></tr>";

while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{ 
	$sid = $converter->decode($sid);
    $s = $converter->decode($s);
    $d = $converter->decode($d);
	echo "<tr height='50' colspan='4' style='background-color:rgba(150,150,150,0.5);'>";
	echo "<td width='100'><input type='checkbox' name='ch[]' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='Homepage.php?coninb=$mid&chk=vmsg'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	
	


?>
<!--<input type='submit' value='Delete' name='delete'/>-->
</div></form>


