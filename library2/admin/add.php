<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	background-image:url(../abc.png);
}
.class1{
	text-align: center;
	font-size:3em;
	font-family: "华文行楷";
	color:#f29;
}
.class2{
	text-align: center;
	font-size:2.5em;
	font-family: "华文行楷";
	color:#f29;
}
</style>

</head>
<body>
    <div class="class1">add</div>
    <div class="class2">
    <form action="add.handle.php" method="GET">
           <!--设置姓名  内容 价钱框架 -->
        name:<input type="text" name="name"><br><br>  
        contect:<input type="text" name="connect"><br><br>
        price:<input type="text" name="price"><br><br>
        <input type="submit" value="提交">
    </form>
    </div>
</body>
</html>