<html>
<meta charset="utf-8">
<?php    
require 'connect_db.php';
session_start();
$content=$_POST['content'];
$name=$_POST['name'];
$id=$_POST['id'];
$mysqltime=date('Y-m-d H:i:s');

$sql="INSERT INTO comment (name,id,content,restime) VALUES ('$name','$id','$content','$mysqltime') ";

if(mysqli_query($conn,$sql)){
   header("Location: http://localhost/neusoft/news.php"); 
}  

else{
	header("Location: http://localhost/neusoft/login.php"); 
}

?>

</html>