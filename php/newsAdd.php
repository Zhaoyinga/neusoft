<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>添加</title>   
    </head>
    <body>
    <?php
        require 'connect_db.php';
    	$title=$_POST['title'];
    	$news=$_POST['news'];
    	$img=$_POST['img'];
        $time=date('Y-m-d H:i:s');
    	$sql="INSERT INTO news(title,news,img,time) VALUES('$title','$news','$img','$time')";
        mysqli_query($conn,$sql);
        header("Location: http://localhost/neusoft/admin.php");
        ?>
    </body>
    </html>