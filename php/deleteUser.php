<?php
// 包含数据库文件
require 'connect_db.php';
// 获取删除的id
$name = $_GET['id'];  
  $sql = "DELETE FROM user WHERE name='$name'";
  // 执行删除
  mysqli_query($conn,$sql);
  header("Location:http://localhost/neusoft/admin.php");
?>