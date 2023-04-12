<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
</head>
<body>
  <div class="container my-5">
<button class="btn btn-primary my-5"><a href="home.php" class="text-white">Home</a></button>
    <h1 class="text-center">Buy Your Products</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Products</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `products`";
    $result = mysqli_query($con,$sql);
   $count=1;
    if($result){
        While($row = mysqli_fetch_assoc($result)){
            $id=$row['pid'];
            $pname=$row['pname'];
            $qty=$row['qty'];
            
           echo" <tr>
                <th>$count</th>
                <td>$pname</td>
                <td>$qty</td>
                    <td><button class='btn btn-primary'><a class='text-white' href='buy.php?buyid=$id'>Buy</a>
      </button></td>
          </tr>";
          $count=$count+1;
        } 
    }
    ?>
  </tbody>
</table>
  </div>
</body>
</html>