<?php
$db="nuway";
$con=mysqli_connect("localhost","root","",$db);
$con->set_charset('utf8');
if(!$con){
	die("connection failed:".mysqli_connect_error());
}
?>