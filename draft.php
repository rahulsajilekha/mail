

<html>
<head><link rel="stylesheet" href="style.css" />

<style>
.dt{
background-color:rgba(51,51,51,0.5);
width: 120%;
height: 100%;
padding: 10px;
border-radius: 25px;  
}
table{
border-radius: 25px;  
color:white;
}

</style>
</head>
<body>
  <div class="dt">



<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;
$id=$_SESSION['sid'];


$sql="SELECT * FROM draft where user_id='$id'";
$dd=mysql_query($sql);
$p= count($dd);
//echo $p;
//echo "<div style='margin-left:10px;width:640px;height:auto;border:2px solid red;'>";

	echo "<table  width='1100' style='background-color:rgba(150,150,150,0.5);'>";
echo "<tr><th>Subject </th><th>Attachement </th><th>Message</th><th>Date</th></tr>";
while(list($draftId,$u_id,$sub,$file,$msg,$date)=mysql_fetch_array($dd))
{       $sub = $converter->decode($sub);
        $msg = $converter->decode($msg);
	echo "<tr height='50'style='background-color:rgba(150,150,150,0.5);'>";
	echo "<td>".$sub."</td>";
	
	echo "<td>".$file."</td>";
	echo "<td>".$msg."</td>";
	echo "<td>".$date."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	
	

echo "</div>";
	
echo "</form>";

?></div>
</body>
</html>
