<html>
<head>
<style>
	.a1{
		
		background-color:rgba(150,150,150,0.5);
		height: 400px;
		width: 800px;
	    border-radius: 25px;
        box-shadow: 5px 15px 12px grey; 
        padding: 20px;
        float: left;
        font-family: arial;
        font-size: 22px;

	}
	.a2{
		
		padding: 25px;
	}
	
	table.ep{
		border-spacing: 50px;
		float: left;
	}
	p.k{
		color: white;
		background-color: black;
		box-shadow: 25px;
		border-radius: 15px; 
		padding: 10px;
	}
	td{
     
     
     border-radius: 10px; 
	}
 
  
</style>
</head>
<body>	
<?php
include_once('connection.php');
include_once('library/enAde.php');
$converter = new Encryption;


$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
				
                
			   $sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
               $dd=mysql_query($sql);
			   $row=mysql_fetch_object($dd);
			   ?>
                <div class="a2" >
			   <div class="a1">



<?php         $c = $converter->decode($row->sub);
              $e = $converter->decode($row->msg);
              $f = $converter->decode($row->sen_id);
               echo "<table class='ep'><tr><td>";
               echo "<p class='k'>";
               echo  $f;
               echo "</p>";
               echo "</td><td></td><tr><td>";
              
               
			   echo "Subject ";
               echo "</td><td>";
              
               echo $c;
               
              echo "</td></tr><tr><td>";
               
		       echo "Message ";
		      
		       echo "</td><td>";
		       echo $e;
		       echo "</td></tr><tr><td>";
		       echo "Attachement ";
		       echo "</td><td>";
			   $att=$row->attachement;
			   if($att!="")
			   echo "<a href='upload//$att'>download attachement</a>";
		       echo "</td></tr></table>";
			 }
			 ?>
			 	
			 </div></div>
			</body>