<?php
    require_once '../connect.php';
    //补获name  connect   price
    $name=$_GET['name'];
    $connect=$_GET['connect'];
    $price=$_GET['price'];
    //sql的修改语句   
    $sql="UPDATe library1 SET connect='$connect',price='$price' WHERE name='$name'";
    //若修改成功  success  否则  failed  并跳转到select。php
    if (mysqli_query($con,$sql))
    {
        echo "<script>alert('modify success!');window.location.href='select.php';</script>";
    }
    else 
    {
        echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
    }