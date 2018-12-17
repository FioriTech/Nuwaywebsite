<?php
include "backend/connection.php";
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
      if($id1==$id){
      echo"
      <br>
            <br>
      <div class='sub-blog-box'>
       <br>
      <p class='sub-blog-heading'>$blog_heading</p>
       <br>
        <img src='$blog_img'>
        <br>
        <p class='sub-blog-desc'>$blog_desc</p>
      </div>
      <br>
      <br>
      ";
    }
      }
  } 
?>