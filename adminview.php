</html>
<head>
<link rel="stylesheet" href="style5.css" />

<style>
a{
	color: red;
}
.delete{
  background-color: #333;
    color: white;
    border: 3px solid #ff0000;
  border-radius: 20px;
  height: 35px;
  width: 90px;
}
.delete:hover {
  border: 3px solid green;
}
.f31{
  background-color: #333;
  padding: 20px;
  border-radius: 20px;
  color: white;
  height: 580px;

}
</style>
</head>
<body>
<div class="container1">
<div class="f31">
<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;


@$id='admin';
@$id=$converter->encode($id);



        echo "<div style='margin-left:10px;font-family:Verdana;'>";
		echo "<form action='delete_ad_msg.php' method='post'>";

	    echo "<table width='1200'>";
        echo "<tr><td><input type='submit' value='Delete' class='delete' name='delete'/></td></tr>";


for ($i=0; $i < 1000; $i++) { 

        $sql="select * from usermail where rec_id ='$id' and mail_id=$i";
		$d=mysql_query($sql);
		$y="vmsg";
		
		list($a,$b,$c,$e,$f,$g,$h)=mysql_fetch_array($d);

		 if ($a!='')
		 {
		$c = $converter->decode($c);
        $e = $converter->decode($e);
       
       echo "<tr height='50' colspan='4' style='background-color:rgba(150,150,150,0.5);'>";
	   echo "<td width='100'><input type='checkbox' name='ch[]' value='$a'/></td>";
       echo "<td width='300'>".$c."</td>";
	   echo "<td width='400'><a href='adminhome.php?coninb=$a&chk=$y'>".$e."</a></td>";
	   echo "<td width='100'>".$h."</td>";
	   echo "</tr>";
	}
	}
?>
</form>
</div>
</body>
</html>