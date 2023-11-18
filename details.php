
<?php
    require_once 'components/db_connect.php';

    $sql = "SELECT * FROM `products` WHERE id =$_GET[prodID]";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
            
            $card = "
            <div class='p-2'>
             <div class='card' >
               <img src='$row[picture]' class='card-img-top' alt='...'>
               <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>Price:$row[price]</p>
                    <p class='card-text'>Type:$row[type]</p>
                    <a href='details.php?prodID=$row[id]' class='btn btn-primary'>Details</a>
                    <a href='update.php?prodID=$row[id]' class='btn btn-warning'>Update</a>
                    <a href='delete.php?prodID=$row[id]' class='btn btn-danger'>Delete</a>
                </div>
              </div>
            </div>
        ";
        mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

      <?php require_once 'components/navbar.php'; ?>
      <div class="container">
                <?=$card; ?>
      </div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>