<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php
    $user = 'root';
    $password = 'root';
    $db = 'testing';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);

    $query = $pdo->query('SELECT * FROM `users`');
    // while ($roy = $query->fetch(PDO::FETCH_ASSOC)) {
    //   echo '<h1>' . $row['login'] . '</h1>' .
    //   '<p><b>Email:</b>' . "$row['email']" . '</p>'
    //   '<p><b>Имя:</b>' . "$row['name']" . '</p>'
    //   '<p><b>Фамилия:</b>' . "$row['surneme']" . '</p>';
    // }

      // while ($roy = $query->fetch(PDO::FETCH_OBJ LIMIT 2))

      // while ($roy = $query->fetch(PDO::FETCH_OBJ ORDER BY `id` ASC LIMIT 2))
    // while ($roy = $query->fetch(PDO::FETCH_OBJ)) {
    while ($roy = $query->fetch(PDO::FETCH_OBJ ORDER BY `login` DESC LIMIT 2))
      echo '<h1>' . $row->login . '</h1>' .
      '<p><b>Email:</b>' . $row->email . '</p>'
      '<p><b>Имя:</b>' .   $row->name . '</p>'
      '<p><b>Фамилия:</b>' . $row->surneme . '</p>';
    }
    $name = 'Петр';
    $sql = 'SELECT `name` , `id` , `email` FROM `users` WHERE `name` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$name);
    $users = $squery->fetchAll(PDO::FETCH_OBJ);

    var_dump($users);
  ?>
</body>
</html>
