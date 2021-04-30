<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    안녕하세요.
    <?php echo $_GET['address']; ?>에 사시는 
    <?php echo $_GET['name']; ?>님
    <?php echo $_GET['나이']; ?>세
    <!--
    URL : localhost/parameter.php?name=sarah&address=광주&나이=22
    -->
  </body>
</html>
