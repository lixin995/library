<?php
    require_once '../connect.php';
    $sql="SELECT * FROM library1";//�鿴���
    $temp=mysqli_query($con, $sql);
    while ($row=mysqli_fetch_assoc($temp))  //�����е���Ϣ�����������
    {
        $data[]=$row;
    }
    foreach ($data as $everyData)  //ѭ�������������
    {
 ?>
    //������    ɾ����һ������
    <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a>
 <?php 
    echo $everyData['name'],": ".$everyData['price'];
    echo "<br>";
    }
?>