<?php
include('./db_conn.php');

$mb_id = trim($_POST['mb_id']);
$mb_pw = trim($_POST['mb_password']);
$mb_name = trim($_POST['mb_name']);
date_default_timezone_set('Asia/Seoul');
$mb_datetime = date('Y-m-d H:i:s', time());



//변수값을 데이터 sql쿼리문을 작성하여 데이터베이스에 자료 입력한다.
$sql = "SELECT PASSWORD('$mb_pw') AS pass";
$result = mysqli_query($conn,$sql);

// $mb_pw = PASSWORD_HASH('$mb_pw',PASSWORD_DEFAULT);
$row = mysqli_fetch_assoc($result);
$mb_pw = $row['pass'];

$sql = "insert into korair_member (mb_id,mb_password,mb_name,mb_datetime) value ('$mb_id','$mb_pw','$mb_name','$mb_datetime')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "<script>alert('회원가입이 완료되었습니다.');</script>";
  echo "<script>location.replace('./login.php');</script>";
}else{
  echo "회원가입 실패 : " . mysqli_error($conn);
  mysqli_close($conn);
}

?>