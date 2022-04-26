<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style>
     body
     {
       background-color:cyan;
     }
     </style>
    <title>TO Do List!!!</title>
  </head>
  <body>
      <br>
      <br>
    <h1><center>Hey,Want to Update your list?Then Go Ahead!! </center></h1>
    <?php
      include 'database.php';
      $id=$_GET['id'];
      $sql="SELECT * FROM todos1 WHERE id=".$id;
      $result=mysqli_query($conn,$sql);
      if($result)
      {
          $row=mysqli_fetch_assoc($result);
          $title=$row['Title'];
      }
   
   ?>
   
   
   
   
    <br>
    <br>
    <div class="w-50 m-auto">
   <form action="edit_action.php" method="post" autocomplete="off">
     <label for="title"><b>Task:</b></label>
     <input class="form-control" type="text"name="title" id="title" value="<?php global $title; echo $title?>"  placeholder="Update your list with the new ones's..."Required>
     <input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>">
     <br>
     <button class="btn btn-success">Add to list</button>
    </form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>