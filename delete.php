<?php
  
    include 'database.php';
    $id=$_GET['id'];
    $sql="DELETE FROM todos1 WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location: ./index1.php");
    }

?>