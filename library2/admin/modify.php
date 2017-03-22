<?php
    //补获name   在修改完  提交之后跳转到 modify。handle。php
    $name=$_GET['name'];
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <style>
        body{
	       background-image:url(../abc.png);
        }
        .class1{
	       font-size: 24px;
	       text-align: center;
	       height: 280px;
	       width: 90%;
           font-family: "华文行楷";
        	color:#f28;
        }
    </style>
</head>
<body>
    <div class="class1">
    <form action="modify.handle.php" method="get">
        <br>
        name:<input type="text" name="name" value="<?php echo $name;?>"><br><br>
        content:<input type="text" name="connect"><br><br>
        price:<input type="text" name="price"><br><br>
        <input type="submit" value="提交">
    </form>
    </div>
</body>
</html>