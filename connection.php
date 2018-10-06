<?php
session_start();
error_reporting(0);
$con=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("10am",$con);
?>