<?php
    require_once '../connect.php';
    $sql="SELECT * FROM library1";//查看语句
    $temp=mysqli_query($con, $sql);
    while ($row=mysqli_fetch_assoc($temp))  //将已有的信息存放在数组中
    {
        $data[]=$row;
    }
    foreach ($data as $everyData)  //循环输出上述数组
    {
 ?>
    //超链接    删除这一行数据
    <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a>
 <?php 
    echo $everyData['name'],": ".$everyData['price'];
    echo "<br>";
    }
?>