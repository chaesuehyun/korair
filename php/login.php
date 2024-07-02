<?php
include('./db_conn.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <!--css초기화 서식-->
  <link href="../css/reset.css" type="text/css" rel="stylesheet">
  <!--공통서식-->
  <link href="../css/common.css" type="text/css" rel="stylesheet">
  <style>

  </style>
</head>
<body>
  <main>
    <section>
      <h2>Login</h2>
      <form name="login" method="post" action="./login_check.php" onsubmit="return form_check();">
        <p>
          <label for="mb_id">아이디 : </label>
          <input type="text" id="mb_id" name="mb_id">
        </p>

        <p>
          <label for="mb_password">비밀번호 : </label>
          <input type="password" id="mb_password" name="mb_password">
        </p>

        <p>
          <input type="checkbox" id="id_save">
          <label for="id_save">아이디 저장</label>
        </p>

        <p>
          <input type="submit" value="로그인" id="login_btn">
        </p>

        <p>
          <a href="../index.php" title="메인화면으로">메인화면으로</a>
          <a href="id_search.php" title="아이디찾기">아이디찾기</a>
          <a href="pw_search.php" title="비번찾기">비번찾기</a>
          <a href="join.php" title="회원가입">회원가입</a>
        </p>

        <h3>SNS 로그인</h3>
        <a href="#" title="카카오 로그인">카카오 로그인</a>
        <a href="#" title="네이버 로그인">네이버 로그인</a>
        <a href="#" title="구글 로그인">구글 로그인</a>

      </form>
    </section>
  </main>
  <script>
    function form_check(){
      let id = document.getElementById('mb_id').value;
      let pw = document.getElementById('mb_password').value;
      if(id.length < 1){
        alert('아이디를 입력하지 않았습니다.')
        return false;
      }
      if(pw.length < 1){
        alert('패스워드를 입력하지 않았습니다.')
        return false;
      }

    }
  </script>

</body>
</html>
