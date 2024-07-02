<?php 
include('./db_conn.php');

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <!--메인서식-->
  <link href="../css/main.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      //중복확인 버튼을 하고싶으면 이걸로
      // $('#btn').on('click',function(){})
      //id에 키보드를 누르면 바로 함수가 실행됨.
      $('#mb_id').on('keyup',function(){  
        let self = $(this);
        let mb_id;
        //id가 일치하면 (아이디 입력폼에 id값이 일치하면)
        if(self.attr("id") === "mb_id"){
          mb_id = self.val();//입력한 값을 변수에 담는다 
        }
        $.post(
          "./id_check.php",
          {mb_id : mb_id},
          function(data){
            if(data){
              self.parent().parent().find('div').html(data);
              self.parent().parent().find('div').addclass('id_check');
            }
          }
        )
      })
    })
  </script>
</head>
<body>
  <main>
    <secion>
      <h2>회원가입</h2>
      <form name="join" method="post" action="./regiupdate.php" onsubmit="return form_check();">
        <!-- no , mb_id , mb_password , mb_name , mb_date -->
        <p>
          <label for="mb_id">아이디 : </label>
          <input type="text" maxlength="16" placeholder="아이디 입력해 주세요." id="mb_id" name="mb_id">
          <!-- <input type="button" value="중복확인" id="id_check"> -->
          <div class="id_check">아이디가 실시간으로 검사됩니다.</div>
        </p>
        <p>
          <label for="mb_password">패스워드 : </label>
          <input type="password" maxlength="16" placeholder="비밀번호 입력해 주세요." id="mb_password" name="mb_password">
        </p>
        <p>
          <label for="mb_name">이름 : </label>
          <input type="text" maxlength="16" placeholder="이름" id="mb_name" name="mb_name">
        </p>

        <p>
          <input type="submit" value="가입하기" id="sub_btn">
          <input type="reset" value="취소하기" id="reset_btn">
          <a href="../index.php" title="메인화면으로">메인화면으로</a>

        </p>
      </form>
    </secion>
  </main>
  <script>
    function form_check(){
      let id = document.getElementById('mb_id').value;
      let pw = document.getElementById('mb_password').value;
      let name = document.getElementById('mb_name').value;
      if(id.length < 1){
        alert('아이디를 입력하지 않았습니다.')
        return false;
      }
      if(pw.length < 1){
        alert('패스워드를 입력하지 않았습니다.')
        return false;
      }
      if(name.length < 1){
        alert('이름을 입력하지 않았습니다.')
        return false;
      }
      return true;

    }
  </script>
</body>
</html>