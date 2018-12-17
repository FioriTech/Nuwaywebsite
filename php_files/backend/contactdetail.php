<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$run_querry="INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	header("location:../contact.php");
}
}
?>