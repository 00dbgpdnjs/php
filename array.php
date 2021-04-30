<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Array 배열</h1>
    <?php
    $coworkers = array('sarah', 'tom', 'alice', 'taeho');
    // coworkers라는 변수에 배열을 담음
    echo $coworkers[0].'<br>';
    echo $coworkers[3].'<br>';
    echo count($coworkers);
    // var_dump(count($coworkers)); 도 해보기
    array_push($coworkers, 'leezche', 'happy');
    // 배열에 없는 값을 끝에 추가
    var_dump($coworkers);
     ?>
  </body>
</html>
