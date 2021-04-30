<?php
 rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
 file_put_contents('data/'.$_POST['title'], $_POST['description']);
 header('Location: /index.php?id='.$_POST['title']);
 ?>
 <!-- rename : http://127.0.0.1/index.php?id=HTML1  에서 본문을 업데이트 하기위해 update를 클릭하고, title을 HTML4로 변경하고 submit하면, 이전 title인 old_title 이 update 하기 전 title이 되고 (여기서는 HTML1) , 현재 타이틀이 HTML4가 되므로, data 디렉토리 안에있던 HTML1이 HTML4로 바뀜 (제목만 바뀌고 내용은 안바뀜 왜냐면 rename만 해서)-->
 <!-- file_put_contents : 내용도 바꿔줌. -->
 <!-- header : 업데이트를 하면 바뀐 후 그 주소로 가줌. URL이 어쩌고저쩌고 HTML1 에서 어쩌고저쩌고 HTML4로 -->
 <!-- rename이 없으면 디렉토리 안에있는 파일 이름이 안바뀌니까 new title로 된 파일을 디렉토리 안에 생성시켜줌. 따라서 HTML1 이 그대로 있고 HTML4 파일도 생김 -->
