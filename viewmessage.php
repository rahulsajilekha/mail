<?php
include_once('connection.php');

$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
				
                
			   $sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
               $dd=mysql_query($sql);
			   $row=mysql_fetch_object($dd);
			   echo "Subject :".$row->sub."<br/>";
		       echo "Message :".$row->msg;
			   $att=$row->attachement;
			   if($att!="")
			   echo "<a href='upload//$att'>download attachement</a>";
		       
			 }