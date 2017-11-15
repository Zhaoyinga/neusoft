<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>退出</title>   
        <!-- Bootstrap -->
    </head>
    <body >
        <?php
            session_start();
            session_destroy();
            header("Location: http://localhost/neusoft/index.php"); 
        ?>
    </body>
</html>