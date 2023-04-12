<?php
include "config.php";
if(isset($_GET['buyid'])){
    $id=$_GET['buyid'];
    $sql = "DELETE FROM `products` WHERE pid=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "buying Success";
        echo "<script>alert('Buyin Success');</script>";
        include "display.php";
    }else{
        echo "Failed".$con->error;
    }
}
?>