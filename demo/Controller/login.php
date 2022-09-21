<?php
//khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'user';
// khởi tạo kết nối
$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
// Dev change this cmt!
if (!$connect) {
    exit('Kết nối không thành công!');
}
// thành công
echo 'Kết nối thành công!';
