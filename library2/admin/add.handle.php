<?php
    //执行一次  
    require_once '../connect.php';
    //补获name connect price
    $name=$_GET['name'];
    $connect=$_GET['connect'];
    $price=$_GET['price'];
    echo $name;
    echo $connect;
    echo $price;
    ///sql语句的插入   
    $sql="INSERT INTO library1(name,connect,price) VALUES('$name','$connect','$price')";
    //若插入成功   则弹出文本框   add success 并跳转到select。php中  ，否则跳转到add。php中重新添加
    if (mysqli_query($con, $sql))  //执行一条语句，插入语句成功返回ture
    {
        echo "<script>alert('add success!');window.location.href='select.php';</script>";
    }
    else   
    {
        echo "<script>alert('add failed!');window.location.href='add.php';</script>";
    }
    ?> 