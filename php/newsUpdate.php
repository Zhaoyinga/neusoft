<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>更新</title>   
    </head>
    <body>
    <?php
        require 'connect_db.php';
        $id=$_POST['id'];
    	$title=$_POST['title'];
    	$news=$_POST['news'];
    	$img=$_POST['img'];
    	$sql="UPDATE news SET title='$title',news='$news',img='$img' WHERE id='$id'";
        mysqli_query($conn,$sql);
        header("Location: http://localhost/neusoft/admin.php");
        ?>
    </body>
    </html>