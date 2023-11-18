
<?php
    require_once 'components/db_connect.php';

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    $card = "";
            
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $card .= "
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
            
        }
    }
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



      <?php require_once 'components/navbar.php' ?>
      <div class="container">
           <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                 <?= $card;?>
            </div>
       </div>    


       <h1>Media Index</h1>

<ul>
    <li><a href="#" onclick="showPublisherMedia('Publisher A')">Publisher A</a></li>
    <li><a href="#" onclick="showPublisherMedia('Publisher B')">Publisher B</a></li>
</ul>

<script>
    function showPublisherMedia(publisher) {
        window.location.href = 'publisher.php?publisher=' + encodeURIComponent(publisher);
    }
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>