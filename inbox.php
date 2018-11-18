<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;


$id=$_SESSION['sid'];

/*
$sql="SELECT * FROM usermail where rec_id='$id'";

$dd=mysql_query($sql);

echo $dd;
echo "<div>";

	echo "<table  width='1200' style='background-color:rgba(150,150,150,0.5);'>";
echo "<tr><th>Subject </th><th>Attachement </th><th>Message</th><th>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$a,$d)=mysql_fetch_array($dd))
{
	echo "<tr height='50'style='background-color:rgba(150,150,150,0.5);'>";
	echo "<td>".$sid."</td>";
	
	echo "<td>".$s."</td>";
	echo "<td>".$d."</td>";
	
	echo "</tr>";	
	}
	echo "</table>";
	
	

echo "</div>";
	
echo "</form>";*/

        echo "<div style='margin-left:10px;font-family:Verdana;'>";
		echo "<form action='delete_msg.php' method='post'>";

	    echo "<table width='1200'>";
        echo "<tr><td><input type='submit' value='Delete' name='delete'/></td></tr>";


for ($i=1; $i < 1000; $i++) { 
	

        $sql="select * from usermail where rec_id ='$id' and mail_id=$i";
		$d=mysql_query($sql);
		$y="vmsg";
		//list($a,$b,$c,$e,$f,$g,$h)=mysql_fetch_array($d);
		//echo $a;
		//echo .$b.;

		list($a,$b,$c,$e,$f,$g,$h)=mysql_fetch_array($d);

		 if ($a!='')
		 {
		$c = $converter->decode($c);
        $e = $converter->decode($e);
       
       echo "<tr height='50' colspan='4' style='background-color:rgba(150,150,150,0.5);'>";
	   echo "<td width='100'><input type='checkbox' name='ch[]' value='$a'/></td>";
       echo "<td>".$c."</td>";
	   echo "<td><a href='HomePage.php?coninb=$a&chk=$y'>".$e."</a></td>";
	   echo "<td>".$h."</td>";
	   echo "</tr>";
	}
	}
?>