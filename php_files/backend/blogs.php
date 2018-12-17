<?php
include "connection.php";
$run_query="SELECT * FROM blogs";
$run=mysqli_query($con,$run_query);
if(mysqli_num_rows($run)>0)
	{
		while($row=mysqli_fetch_array($run))
		{
			$id=$row['id'];
			$blog_img=$row['blog_img'];
			$blog_heading=$row['blog_heading'];
			$blog_desc=$row['blog_desc'];
			echo"
			<br>
			<br>
			<a href='sub_blogs.php?id=$id'><div class='inner-blog-box'>
        <img src='$blog_img'>
        <br>
        <p class='blog-heading'>$blog_heading</p>
        <p class='blog-desc'>$blog_desc</p>
        <hr>
         <br>
      </div></a>
			";
	    }
	}	
?>