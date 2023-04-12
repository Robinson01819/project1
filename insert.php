<?php
include "config.php";

if(isset($_POST['submit'])){

  $pname=$_POST['pname'];
  $qty = $_POST['qty'];
  $sql = "INSERT INTO `products`(`pname`, `qty`) VALUES ('$pname','$qty')";
  $result=mysqli_query($con,$sql);
    if($result){
      // echo "Data innserted";
      echo "<script>alert('Data insert')</script>";
    }else{
        echo"not insertded".$con->error;
    }
}
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

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <h1 class="text-center">Add Your Products </h1>
        <div class="mb-3">
          <label for="product_name" class="form-label">Product name</label>
          <input type="tsex" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname">
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">quantity</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="qty">
        </div>
        <input type="Submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
  </div>
</body>
</html>