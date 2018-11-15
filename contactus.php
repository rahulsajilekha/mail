
<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}
</style>
    
</head>

<body>
  

<div class="card">
  <img src="sundar.jpg" alt="John" style="width:100%">
  <h1>Sundar Pichai</h1>
  <p class="title">CEO & Founder</p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>
<div class="card">
  <img src="markzuc.jpg" alt="Mark" style="width:100%">
  <h1>Mark Zuck</h1>
  <p class="title">Manager</p>
  <p>Oxford University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>
<div class="card">
  <img src="Stevejo.jpg" alt="Steve" style="width:100%">
  <h1>Steve Jo</h1>
  <p class="title">Assistant Manager</p>
  <p>Kerala University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>

</body>
</html>
