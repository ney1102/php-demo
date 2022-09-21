<?php
//khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'demo';
// khởi tạo kết nối
// $connect = new mysqli($hostName, $userName, $passWord, $databaseName);
$connect = new PDO("mysql:host=localhost; dbname=demo", "root", "");
//Kiểm tra kết nối
if (!$connect) {
    exit('Kết nối không thành công!');
}
// thành công
echo 'Kết nối thành công!';
