<?php
  $title=$_POST['title'];
  include 'database.php';
  $sql="INSERT INTO  todos1(title)VALUES('$title')";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
      header("location: ./index1.php");
  }


?>