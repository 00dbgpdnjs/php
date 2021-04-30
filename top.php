<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
       print_title();
       ?>
    </title>
    <!-- print라는 함수에, 어떤 기능인지 이름을 내가 알기 쉽게 부여 -->
  </head>
  <!-- 예제 코드: https://wikibook.github.io/php-mysql -->
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <!--
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
      -->
      <?php
       print_list();
       ?>
    </ol>
