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
    	$name=$_POST['name'];
    	$age=$_POST['age'];
    	$password=$_POST['password'];
    	$sex=$_POST['sex'];
    	$sql="UPDATE user SET age='$age',sex='$sex',password='$password' WHERE name='$name'";
        mysqli_query($conn,$sql);
        header("Location: http://localhost/neusoft/admin.php");
    ?>
    </body>
    </html>