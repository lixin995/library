<?php
    require_once '../connect.php';
    //����name
    $name=$_GET['name'];   
    //sql��ɾ�����
    $sql="DELETE FROM library1 WHERE name='$name'";
    //��ɾ���ɹ�   �򵯳�delete ����  ������ת��select��php�У��������  failed
    if(mysqli_query($con,$sql))        ///��add.handle.php����
    {
        echo "<script>alert('delete success!');window.location.href='select.php';</script>";
    }
    else 
    {
        echo "<script>alert('delete failed!');window.location.href='select.php';</script>";
    }