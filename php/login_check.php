<?php

include('./db_conn.php');


$mb_id = trim($_POST['mb_id']); 
$mb_pw = trim($_POST['mb_password']);

echo $mb_id ."<br>";
echo $mb_pw ."<br>";

//사용자가 입력한 아이디값을 데이터베이스에서 검색한다.
$sql = "select * from korair_member where mb_id = '$mb_id'";
$result = mysqli_query($conn,$sql);
$mb=mysqli_fetch_assoc($result);

//사용자가 입력한 패스워드와 데이터베이스 패스워드가 암호가 일치하는지
$sql = "SELECT PASSWORD('$mb_pw') AS pass";

//쿼리결과를 변수에 담는다.
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$password = $row['pass'];

echo '데이터 베이스 암호' . $password .'<br>';
echo '사용자가 입력한 암호' . $mb_pw;

//만약에 사용자 암호와 데이터베이스 암호가 일치하지 않는다면
if(!$mb['mb_id'] || !$mb[$password ==$mb['mb_pw'] ]){
  echo "<script>alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다. \\n비밀번호는 대소문자를 구분합니다.');</script>";
  echo "<script>location.replace('./login.php');</script>";
};

$_SESSION['ss_mb_id'] = $mb_id ;

mysqli_close($conn) ;
if(isset($_SESSION['ss_mb_id'])){
  echo "<script>alert('로그인 되었습니다.');</script>";
  echo "<script>location.replace('../index.html')</script>";
};


?>