<?php

session_start();//세션 시작
session_unset();//모든 세션정보를 언레지스터 시켜줌
session_destroy();//세션 해제

if(!isset($_SESSION['ss_mb_id'])){//세션 정보가 삭제 되었다면(없다며) 로그인 페이지로 이동
  echo "<script>alert('로그아웃 되었습니다');</script>";
  echo "<script>location.replace('../index.php')</script>";
  exit;
}

?>