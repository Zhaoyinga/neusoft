<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>注册页面脚本</title>   
    </head>
    <?php
   
	require 'connect_db.php';
	$name=$_POST['name'];
	$age=$_POST['age'];
	$password=$_POST['password'];
	$sex=$_POST['sex'];
	$mysqltime=date('Y-m-d H:i:s');
	    $sql="INSERT INTO user (name,age,sex,password,restime) VALUES ('$name','$age','$sex','$password','$mysqltime')";
	    if (mysqli_query($conn,$sql)){
	        session_start();
	        if (isset($_SESSION['name'])) {
	        echo '<center><font size="5"><a href="../index.php">注册成功! 您已登录了其他账号，点击返回首页</a></font></center>';
	        }
	        else{echo '<center><font size="5"><a href="../login.php">注册成功! 点击前往登录页面</a></font></center>';}
	    }
	    else {
	        header("Location: http://localhost/neusoft/register_err.php"); 
     
		}
       $conn->close();
?>

    <body>
    </body>
</html>