<html>
<head>
<style>
.dt{
background-color:rgba(51,51,51,0.5);
width: 100%;
height: 100%;
padding: 100px;
border-radius: 25px;	
}
</style>
</head>
<body>
	<div class="dt">
		<?php
$od=opendir("theme");
while($file=readdir($od))
{	
	if($file!='.' && $file!='..')
	{
	
		echo "<a href='HomePage.php?conTheme=$file'>
			
				<img src='theme/$file' height='100' width='100'> 
			</a>";
	}
}

?>
</div>
</body>
</html>