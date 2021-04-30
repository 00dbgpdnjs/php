<!DOCTYPE html>
<htm>
  <head>
    <meta charset="utf-8">
    <title>Loop 반복문</title>
  </head>
  <body>
    <h1>while</h1>
    <?php
    echo '1<br>';
    $i = 0;
    // i라는 변수에 0을 넣음 
    while ($i < 3) {
      echo '2<br>';
      $i = $i + 1;
    }
    echo '3<br>';
     ?>
  </body>
</html>
