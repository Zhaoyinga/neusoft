<html>
<meta charset="utf-8">
<?php    
require 'connect_db.php';
session_start();
$num=$_POST['number'];

if(preg_match('/^[1-9]{1}[0-9]?$/',$num)&&!empty($num)){
$user_name=$_SESSION['name'];
$goods_name=$_SESSION['temp'];
$mysqltime=date('Y-m-d H:i:s');
$check="SELECT num FROM cart WHERE user_name='$user_name' AND goods_name='$goods_name'";
if($num2=mysqli_fetch_row(mysqli_query($conn,$check))){
    $sum=$num+$num2[0];
    $sql="UPDATE cart SET num=$sum WHERE user_name='$user_name' AND goods_name='$goods_name'";
    mysqli_free_result($result);
}
else{
    $sql="INSERT INTO cart (user_name,goods_name,num,reg_date) VALUES ('$user_name','$goods_name','$num','$mysqltime')";
}
if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/neusoft/news.php"); 
}  
} 
else{
	header("Location: http://localhost/neusoft/login.php"); 
}

?>

</html>