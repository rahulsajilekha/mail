<?php
include_once('connection.php');

//echo"<table><tr><td align=center>";
		$ret=mysql_query("select * from latestupd ORDER BY upd_id Desc ");
		while($row=mysql_fetch_array($ret))
		{
		echo"<table width='330'><tr style='background-color:rgba(255,255,255,0.7);'><td align=center>";
		echo "<strong>".$row['title']."</strong><br/><br/>" ;
		echo "<img src='latestUpdates//$row[3]'  alt='latestUpdates/$row[3]' width='200' height='200'/>";
		echo "<br/>".$row['content']."<br/><br/><br/><br/>" ;
		echo"</td></tr><tr height='30'></tr></table>";	
		}
//echo"</td></tr></table>";		
	
?>