<?php

include('./db_conn.php');

$mb_id = trim($_POST['mb_id']);

if($mb_id !=NULL){
  $sql = " SELECT * FROM korair_member WHERE mb_id = '$mb_id'";
  $result = mysqli_query($conn,$sql);
  $mb = mysqli_fetch_assoc($result);

  if(isset($mb['mb_id'])){
    echo " 존재하는 아이디 입니다.";
  }else{
    echo " 존재하지 않는 아이디 입니다.";
  }

}


?>