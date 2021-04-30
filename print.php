<?php
function print_title(){
  if (isset($_GET['id'])) {
    echo htmlspecialchars($_GET['id']);
  } else {
    echo'welcome';
  }
}
function print_description(){
  if (isset($_GET['id'])) {
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo'Hello, php';
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    $title = htmlspecialchars($list[$i]);
    if ($list[$i] != '.') {
      if ($list[$i] != '..') {
        // scandir라는 함수 특성상 .과..이 출력되서 배제해야함
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
        // \ : 바로 다음 것을 문자로 인식 : \" = 문자 "
        // \n : 줄바꿈
      }
    }
    $i = $i + 1;
  }

  // echo "<li>$list[0]</li>\n";
  // echo "<li>$list[1]</li>\n";
  // echo "<li>$list[2]</li>\n"; ~~
 // <!--
 // $list : List라는 변수에 담겠다
 // scandir : scan + directory : 스캔하고 싶은 디렉터
 // './data' : 현재 디렉터리 아래라는 의미의 ./ 와 data라는 디렉터리 (data만 적어됨)
 // -->
}
 ?>
 <!-- if 안하고 echo $_GET['id']만 쓰면 WEB링크를 눌렀을 때 경고창뜸. <h2></h2>에서 echo $_GET['id'] 를 실행하라고 했는데 URL에 id 값을 안매겨서 id가 먼지모르니까  -->
  <!--
  URL : localhost/index.php?id=___(ex.CSS)
  보안 고려 안돼서 실제로 사용하면 안됨
  -->
