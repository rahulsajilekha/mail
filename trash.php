
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
color: white; 
}
.bu{
border-radius: 25px;
border-color: red;
background-color: rgba(150,150,150,0.5);;
color: white; 
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



        echo "<div style='margin-left:10px;font-family:Verdana;'>";
		echo "<form action='deletetrashmsg.php' method='post'>";

	    echo "<table width='1100'>";
        echo "<tr><td><input type='submit' class='bu' value='Delete' name='delete'/></td></tr>";


for ($i=0; $i < 1000; $i++) { 
	

        $sql="select * from trash where rec_id ='$id' and trash_id=$i";
		$d=mysql_query($sql);
		$y="vtmsg";
		//list($a,$b,$c,$e,$f,$g,$h)=mysql_fetch_array($d);
		//echo $a;
		//echo .$b.;
		//print_r($sql);

		list($a,$b,$c,$e,$f,$h)=mysql_fetch_array($d);

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

?></div>
</body>
</html>
