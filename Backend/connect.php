<?php
$host = "10.0.0.21";//"43.201.33.128";
$user = "kisia";//"admin";
$pw = "passwd";//"1234";
$db = "Air_5T4R";

$connect = new mysqli($host, $user, $pw, $db);

if ($connect->connect_error) {
    die("연결 실패: " . $connect->connect_error);
}
?>
