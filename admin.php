<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>东软校讯后台</title>   
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/bootstrap.js" type="text/javascript" ></script> 
        <script src="js/npm.js" type="text/javascript" ></script> 
    </head>
    <body>
<div class="container" style="background: url(images/background.jpg);">
<div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#" target="_top">东软校讯管理</a>
                </div>
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>


                </div>             
            </nav>           
        </div>
        <div class="col-md-2 column">
        </div>
    </div>

<div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">
        <div width="100%" height="600px">
            <ul class="nav nav-tabs">
                <li id="active1" class="active" onclick="table1()">
                     <a  >用户管理</a>
                </li>
                <li id="active2"  onclick="table2()" >
                     <a >新闻管理</a>
                </li>
            </ul>
            <div id="table1">
            <?php 
                require 'php/connect_db.php';
                $sql='SELECT * FROM user';
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
            echo "
              <form class='form-horizontal' role='form' action='php/userUpdate.php' style='margin-top: 50px' method='post'>
                <div class='form-group'>
                     <label for='inputEmail' class='col-sm-2 control-label'>邮箱</label>
                    <div class='col-sm-8'>
                        <input type='email' class='form-control' id='inputEmail' name='name' value='$row[0]' />
                    </div>
                </div>
                <div class='form-group'>
                     <label for='inputage' class='col-sm-2 control-label'>年龄</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputage' name='age' value='$row[1]'/>
                    </div>
                </div>
                <div class='form-group'>
                     <label for='inputPassword' class='col-sm-2 control-label'>密码</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputPassword' name='password' value='$row[3]' />
                    </div>
                </div>
                <div class='form-group'>
                     <label for='sex' class='col-sm-2 control-label'>性别</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='sex' name='sex' value='$row[2]'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-offset-5 col-sm-7'>
                         <a href='php/deleteUser.php?id=$row[0]'><button type='button' class='btn btn-default'>删除</button></a>&nbsp;&nbsp;
                         <button type='submit' class='btn btn-default'>修改</button>
                    </div>
                </div>
            </form>
            ";

                }
             ?>
              
            </div>
            <div id="table2" style="display: none;">
            <?php 
                $sql='SELECT * FROM news';
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
            echo "
                 <form class='form-horizontal' role='form' action='php/newsUpdate.php' style='margin-top: 50px' method='post'>
                 <input type='text' name='id' value='$row[0]' style='display:none;'/>
                <div class='form-group'>
                     <label for='inputTitle' class='col-sm-2 control-label'>标题</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputTitle' name='title' value='$row[1]' />
                    </div>
                </div>
                <div class='form-group'>
                     <label for='news' class='col-sm-2 control-label'>内容</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='news' name='news' value='$row[2]'/>
                    </div>
                </div>
                <div class='form-group'>
                     <label for='img' class='col-sm-2 control-label'>图片路径</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='img' name='img' value='$row[4]'/>
                    </div>
                </div>               
                <div class='form-group'>
                     <label for='time' class='col-sm-2 control-label'>更新时间</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='time'  disabled='disabled' value='$row[3]' />
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-offset-5 col-sm-7'>
                         <a href='php/newsDelete.php?id=$row[0]'><button type='button' class='btn btn-default'>删除</button></a>&nbsp;&nbsp;
                         <button type='submit' class='btn btn-default'>修改</button>
                    </div>
                </div>
                </form>
            ";
                }
             ?>
            <form class='form-horizontal' role='form' action='php/newsAdd.php' style='margin-top: 50px' method='post'>
                <div class='form-group'>
                     <label for='inputTitle' class='col-sm-2 control-label'>标题</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='inputTitle' name='title'  />
                    </div>
                </div>
                <div class='form-group'>
                     <label for='news' class='col-sm-2 control-label'>内容</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='news' name='news'/>
                    </div>
                </div>
                <div class='form-group'>
                     <label for='img' class='col-sm-2 control-label'>图片路径</label>
                    <div class='col-sm-8'>
                        <input type='text' class='form-control' id='img' name='img' value='images/'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-offset-5 col-sm-7'>
                         <button type='submit' class='btn btn-default'>添加</button>
                    </div>
                </div>
             </form>
            </div>
        </div>

        </div>
        <div class="col-md-2 column">
        </div>
    </div>
<iframe src="footer.php" frameborder="0" scrolling="no" style="width: 100%"></iframe>
</div>
    </body>

<script type="text/javascript">
function table1(){
        document.getElementById('table1').style.display='block';
        document.getElementById('active1').className='active';
        document.getElementById('active2').className='';
        document.getElementById('table2').style.display='none';

    }
function table2(){
        document.getElementById('table1').style.display='none';
        document.getElementById('active1').className='';
        document.getElementById('active2').className='active';
        document.getElementById('table2').style.display='block';
    }
    </script>
</html>