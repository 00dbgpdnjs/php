<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS</title>
  </head>
  <body>
    <h1>Cross site scripting</h1>
    <!-- 해킹새례 중 웹 사이트를 대상으로 <script> 태그를 주입하는 것으로 update 버튼에 script 태그를 넣는 것. 이 태그는 자바스크립트라는 컴퓨터 언어를 웹 브라우저에서 실행하는 역할. 예를 들어, <script>alert('babo');</script> 라고 작성하고 submit 버튼을 클릭하면 babo 라는 경고창이 뜨고 그 페이지는 방문해도 babo만 뜸 -->
    <?php
    echo htmlspecialchars('<script>alert("babo");</script>');
    ?>
    <!-- 해결방안임. 소스 보기 하면 <가 &gt; 로 표시됨. 문자를 그대로 표
    방문자가 입력할 정보를 무조건 불신하라!
    문자로만 실행되게
    특정 태그만 허용하는 방법도 있음 : strip_tages() -->
  </body>
</html>
