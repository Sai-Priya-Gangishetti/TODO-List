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
          background-image: url('https://miro.medium.com/max/910/0*JoOmlmDs9TGLP0hG');
      }
      .order {
    text-align: center;
    background-color: #a9dbde;
    height: 60px;
}
      </style>
    <title>TO Do List!!!</title>
  </head>
  
  <body>
      <br>
      <br>
      <div class="order">
    <h1><center><i>Hey,Welcome to the TODO-List Application!!!</i></center></h1>
    </div>
    <hr>
    <br>
    <br>
    <div class="w-50 m-auto">
   <form action="data.php" method="post" autocomplete="off">
     <label for="title"><b>Task:</b></label>
     <input class="form-control" type="text"name="title" id="title" Required placeholder="Enter the task that is needed to be added in the list....">
     <br>
     <button class="btn btn-success">Add to list</button>
    </form>
</div>
<br>
<hr class="bg-dark w-50 m-auto">
<div class="w-50 m-auto">
    <h1 style="color:blue"><i><b>Your Lists</b></i></h1>
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Tasks</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php
       include 'database.php';
       $sql="SELECT * FROM todos1";
       $result=mysqli_query($conn,$sql);
       if($result)
       {
           while($row=mysqli_fetch_assoc($result))
           {
               $id=$row['id'];
               $title=$row['Title'];
           
           ?>
           <tr>
               <td><?php echo $id?></td>
               <td><?php echo $title?></td>
               <td>
                 <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm"><i>Edit</i>
                 <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm"><i>Delete</i></td>
        </tr>
        <?php

           }
       }
       ?>
     
  </tbody>
</table>
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