<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$run_querry="INSERT INTO `demo`(`id`,`name`, `email`, `message`) VALUES ('','$name','$email','$message')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	header("location:../../index.php");
}
}
?>