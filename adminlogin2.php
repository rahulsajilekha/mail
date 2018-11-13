 <html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.ca {
    padding: 20px;
    height: 100%;
  }
.fa {
    background-color:#669999  ;
    border: none;
    color: white;
    height: 50px;
    width: 110px;
    text-align: center;
    font-size: 20px;
    font-family: verdana;
    cursor: pointer;
    border-radius: 30px;
    }

.fa:hover {
    background-color:  #b3b3ff;
    
    }

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height:100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}
.pa
{

  background-image: url('22.jpg');
  

   padding: 130px;
   height: 100%;
   box-shadow: 0px 2px 4px grey;
   border-radius: 10px;

   


}    

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
</style>
</head>
 <?php
error_reporting(1);
include_once('connection.php');
if(isset($_POST['signIn']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	$err="fill your id and passwrod first";
	}
	else
	{
	$d=mysql_query("SELECT * FROM admindb where user='{$_POST['id']}'");
	$row=mysql_fetch_object($d);
		$fid=$row->user;
		$fpass=$row->password;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		//header('location:HomePage.php');
		echo "<script>window.location='adminhome.php'</script>";
		}
		else
		{
		$err="invalid id or pass";
		}
	}
}
?>
<body>
  <div id=login class=ca>

  <div class="pa">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="user.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
<form method="post" action="">

    Admin Username
  
		<input type="text" name="id" />
  
 
  Admin Password
  
  
  <input type="password" name="pwd" width="500"/><br/>

	   <button class="fa" type="submit" value="SignIn" name="signIn">Login</button>

	
</form>
</div>
</div>
 </div>
  </div>
</div>
</body>
</html>
