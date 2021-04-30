<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function 함수</h1>
    <h2>Basic 함수의 기본 형식</h2>
    <?php
     function Basic() {
       print("Lorem ipsum dolor1<br>");
       print("Lorem ipsum dolor2<br>");
     }

     basic();
     basic();
     ?>
   <!--
   function이 나오면 지금부터 함수를 정의한다는 것. 그 뒤 문자는 그 함수의 이름을 나타내므로 함수의 이름을 Basic으로 지정. 이 함수를 호출[=basic();]하면 중괄호 속 코드가 실행됨.
   -->
   <h2>parameter매개변수 &amp; argument인자</h2>
   <?php
    function sum($left, $right) {
      print($left+$right);
      // left라고 내가 지정한 변수 = 매개변수;입력값
      print("<br>");
    }
    sum(2,4);
    sum(4,6);
    // 위 숫자들이 argument;입력값
    ?>
    <h2>return 출력값</h2>
    <?php
     function sum2($left, $right){
       return $left+$right;
     }
     print(sum2(2,4));
     file_put_contents('result.txt', sum2(2,4));
     ?>
  </body>
</html>
