<?php
unlink('data/'.basename($_POST['id']));
// basename : 부모 디렉토리고 가지 못하게 함
header('Location: /index.php');
 ?>
<!--
unlink : 클릭하면 그 페이지 삭제
header : 삭제되고 저 URL 즉, 홈(WEB)으로 이동됨
 -->
