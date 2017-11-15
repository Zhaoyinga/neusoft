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
    <body>
        <div class="container" style="background: url(images/background.jpg);">
          <iframe src="header.php" frameborder="0" scrolling="no" style="width: 100%" ></iframe>
            <div class="row clearfix">
                <div class="col-md-2 column">
                </div>
                <div class="col-md-8 column">
                       <?php
                              session_start();
                              require 'php/connect_db.php';
                              if(isset($_GET['id'])){
                                $id=$_SESSION['id']=$_GET['id'];
                              }
                                else{
                                  $id=$_SESSION['id'];
                               }
                               if (isset($_SESSION['name'])) {
                                   $name=$_SESSION['name'];
                               }
                              
                              $sql="SELECT * FROM news WHERE id=$id";
                              $mysqltime=date('Y-m-d H:i:s');
                              //查询数据
                              $result=mysqli_query($conn,$sql);

                              //取数据
                            while($row=mysqli_fetch_row($result)){

                                echo "
                                            <div class='thumbnail'>
                                                <img alt='300x200' src='$row[4]' />
                                                <div class='caption'>
                                                    <h3>
                                                        $row[1]
                                                    </h3>
                                                    <p>
                                                       $row[2]
                                                    </p>
                                                </div>
                                            </div><br>
                                        ";
                        }
                            $sql2="SELECT * FROM comment WHERE id=$id";
                            $query_run=mysqli_query($conn,$sql2);
                            while($row1=mysqli_fetch_row($query_run)) {
                                echo "
                                    <center>
                                        <label for='user'>评论者：$row1[0]</label> &nbsp;&nbsp;<label for='time'>评论时间：$row1[3]</label>                                    
                                    </center>  
                                    <input type='text'  value='$row1[2]' class='thumbnail' style='width:100%;height:50px; background:#CCC;' disabled='disabled'>

                                    
                                ";
                            }
                            if (isset($_SESSION['name'])) {

                            echo "<br><br>
                            <form action='php/addContent.php' method='post'>
                                <input type='text' class='thumbnail' style='width:100%;height:70px;' name='content' value='评论内容'>
                                <input style='display: none' type='text' value='$id' name='id'>
                                <input style='display: none' type='text' value='$name' name='name'>
                                <center><button type='submit' class='btn btn-default'>提交评论</button></center>                           
                            </form><br><br>";
                            }
                        
                        ?>                           
                </div>
                <div class="col-md-2 column">
                </div>
            </div>
          <iframe src="footer.php" frameborder="0" scrolling="no" style="width:100%"></iframe>
        </div>
    </body>
</html>