<?php

$mysql_host = 'localhost';
$mysql_user = 'chaesuehyun';
$mysql_password = 'diane0831!';
$mysql_db = "chaesuehyun";
// MySQL 데이터베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) { // 연결 오류 발생 시 스크립트 종료
    die("연결 실패: " . mysqli_connect_error());
}


// ini_set('display_errors', 'OFF'); //에러 메세지 출력
session_start(); //

?>