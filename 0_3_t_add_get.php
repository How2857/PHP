<?php
echo '你傳送過來的:' . $_GET['cName'].'<br>';
echo'你傳送過來的:' . $_GET['cSex'].'<br>';
echo'你傳送過來的:' . $_GET['cBthday'].'<br>';
echo'你傳送過來的:' . $_GET['cEmail'].'<br>';
echo'你傳送過來的:'. $_GET['cPhone'].'<br>';
echo'你傳送過來的:' . $_GET['cAdd'].'<br>';
include("./conn.php");
$sql_query = "INSERT INTO students (cName,cSex,cBirthday,cEmail,cPhone,cAddr)
VALUES (?,?,?,?,?,?)";
$stmt = $db_link->prepare($sql_query);
$stmt->bind_param("SSSSSS",$_GET['cName'],$_GET['cSex'],$_GET['cBthday'],$_GET['cEmail'],$_GET['cPhone'],$_GET['cAdd']);
$stmt->execute();
//要記得關
$stmt->close();
$db_link->close();
