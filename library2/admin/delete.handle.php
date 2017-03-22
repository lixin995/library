<?php
    require_once '../connect.php';
    //补获name
    $name=$_GET['name'];   
    //sql的删除语句
    $sql="DELETE FROM library1 WHERE name='$name'";
    //若删除成功   则弹出delete ……  ，并跳转到select。php中，否则输出  failed
    if(mysqli_query($con,$sql))        ///与add.handle.php类似
    {
        echo "<script>alert('delete success!');window.location.href='select.php';</script>";
    }
    else 
    {
        echo "<script>alert('delete failed!');window.location.href='select.php';</script>";
    }