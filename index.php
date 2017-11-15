<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>东软校讯</title>   
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/bootstrap.js" type="text/javascript" ></script> 
        <script src="js/npm.js" type="text/javascript" ></script> 
    </head>
    <body background="images/background.gif">
<div class="container" style="background: url(images/background.jpg);">
    <iframe src="header.php" frameborder="0" scrolling="no" style="width: 100%"></iframe>
    <div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">
    
            <div class="row">
    <?php
      require 'php/connect_db.php';
      $sql="SELECT * FROM news";
      //查询数据
      $result=mysqli_query($conn,$sql);

      //取数据
    while($row=mysqli_fetch_row($result)){
        echo "<div class='col-md-4'>
                    <div class='thumbnail'>
                        <img alt='300x200' src='$row[4]' />
                        <div class='caption'>
                            <h3>
                                $row[1]
                            </h3>
                            <p>
                               $row[2]
                            </p>
                            <p>
                                 <a class='btn btn-primary' href='news.php?id=$row[0]'>查看详情</a> 
                            </p>
                        </div>
                    </div>
                </div> ";
}
?>   
            </div>
        </div>
        <div class="col-md-2 column">
        </div>
    </div>
     <iframe src="footer.php" frameborder="0" scrolling="no" style="width: 100%"></iframe>
</div>
           


    </body>
</html>