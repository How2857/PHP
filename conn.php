<?php
//設定字符集
header('Content-type:text/html; charset=utf-8');
//資料庫主機設定
$db_host = 'localhost';
$db_username = 'root';
$db_password = '1234';
$db_name = 'a_school';
//連接資料庫
$db_link = new mysqli($db_host, $db_username, $db_password, $db_name);
// print_r($db_link);
if ($db_link->connect_error != '') {
    die('資料庫連線錯誤');
} else {
    echo'資料庫成功連線';
    //資料格式設定
    mysqli_query($db_link, 'SET NAMEs utf8');
}
