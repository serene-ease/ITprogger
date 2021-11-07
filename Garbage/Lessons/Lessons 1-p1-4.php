<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>PHP</title>
</head>
<body>
Привет <br>
 <?php
    echo '<b>Привет</b><br>' . 'Привет2'. '<br>' . "Hi" . '<br>' . "<input tupe='text'>" . '<br>' . "\"" . "<br>";
    $number = 12;
    $num = 4.6;
    $res = $number+$num;
    echo 'Number = ' . "$number";
    echo '<br>';
    echo 'Num = ' . "$num";
    echo '<br>';
    echo "$number" . '+' . "$num" . '=' . "$res";
    echo '<br>';
    echo 'Переменная равна' . "$number";
    $boolf = false;
    $boolt = true;
    echo '<br>' . 'BoolFalse = ' . $boolf;
    echo '<br>' . 'BoolTrue = ' . $boolt;
    $res1 = $number * 3;
    $res1 += 2;
    echo '<br>' . 'Res1 = ' . $res1;
    $res1 ++;
    echo '<br>' . $res1;
// Константа определяется так:
    define ("PI",3.14);
    echo '<Br>' . PI;
 ?>
</body>
</html>
