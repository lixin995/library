<?php
    require_once '../connect.php';
    //����name  connect   price
    $name=$_GET['name'];
    $connect=$_GET['connect'];
    $price=$_GET['price'];
    //sql���޸����   
    $sql="UPDATe library1 SET connect='$connect',price='$price' WHERE name='$name'";
    //���޸ĳɹ�  success  ����  failed  ����ת��select��php
    if (mysqli_query($con,$sql))
    {
        echo "<script>alert('modify success!');window.location.href='select.php';</script>";
    }
    else 
    {
        echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
    }