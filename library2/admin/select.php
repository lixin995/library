<?php
    require_once '../connect.php';
    $sql="SELECT * FROM library1";
    $temp=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($temp))
    {
        $data[]=$row;
    }
    ?>
    <a href="add.php">add</a><br>
    <?php 
    
    foreach ($data as $everyData)
    {
        ?>
        <html>
        <head>
        
        <style>
            body{
	               background-image:url(../abc.png);
            }
            .class1{
	               text-align: center;
	               font-size:2em;
	               font-family: "»ªÎÄÐÐ¿¬";
            	color:#f39;
	              
                    }
              a:link{
	               text-decoration:none;
              }
         </style>
        </head>
        <body>
        <div class="class1">
        <?php 
        echo $everyData['name'];
        echo "&nbsp&nbsp&nbsp";
        echo $everyData['connect']; 
        echo "&nbsp&nbsp&nbsp";
        echo $everyData['price'];
        ?>   
        <a href="delete.handle.php?name=<?php echo $everyData['name']; ?>">delete</a>
        <a href="modify.php?name=<?php echo $everyData['name']; ?>&connect=<?php echo $everyData['connect']; ?>&price=<?php echo $everyData['price']; ?>">modify</a>
        </div>
    <?php 
       echo "<br>";
    }
    ?>
    </body>
        </html>
    
    