<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>PHP</title>
</head>
<body>

 <?php
 $bool = true;
 $x = 14;
 $y = 20;
 if ((($x + $y) * 20 / 32) > 20 && $bool)
 {echo 'Условие 1 выполнено';}
 if ((($x + $y) * 20 / 32) < 20 || !$bool)
 {echo 'Условие 2 выполнено';}
 else {echo '2-я проверка не сработала';}



 ?>
</body>
</html>
