<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "neusoft";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
} 
?>