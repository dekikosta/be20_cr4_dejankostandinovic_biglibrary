<?php

    require_once 'components/db_connect.php';

   if(isset($_POST["submit"])){
       $name = $_POST["name"];
       $price = $_POST["price"];
       $pic = $_POST["picture"];
       $type =$_POST["type"];

       $sql = "INSERT INTO `products`(`name`, `price`, `picture`, `type`) VALUES ('$name','$price','$pic','$type')";
       if(mysqli_query($conn,$sql)){
          echo "
          <div class='alert alert-success' role='alert'>
             All good.
          </div>
          ";
       }
       else{
         echo"
         <div class='alert alert-danger' role='alert'>
            Somethings wrong.
          </div>
         
         ";
       }

   }
   mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     <?php require_once 'components/navbar.php' ?>

     <form action=""method="post">
        <input type="text" name="name" placeholder="Enter name" class="form-control">
        <input type="number" name="price" placeholder="price"class="form-control">
        <input type="text" name="picture" placeholder="add picture url"class="form-control">
        <select name="type">
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="cd">CD</option>
        </select>
        <input type="submit" name="submit" value="Create" class="btn btn-success">
     </form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>