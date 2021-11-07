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
    while ($row = $query->fetch(PDO::FETCH_OBJ ORDER BY `login` DESC LIMIT 2)) {
      echo '<h1>' . $row->login . '</h1>' .
      '<p><b>Email:</b>' . $row->email . '</p>'
      '<p><b>Имя:</b>' .   $row->name . '</p>'
      '<p><b>Фамилия:</b>' . $row->surneme . '</p>';
    }
    // $name = 'Петр';
    // $sql = 'SELECT `name` , `id` , `email` FROM `users` WHERE `name` = ?';
    // $query = $pdo->prepare($sql);
    // $query->execute([$name);
    // $users = $squery->fetchAll(PDO::FETCH_OBJ);
    $name = 'Петр';
    $id = 4;
    $sql = 'SELECT `name` , `id` , `email` FROM `users` WHERE `name` = :name && `id` = /* > < !=  >= <=*/ :id';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name]);
    $users = $squery->fetchAll(PDO::FETCH_OBJ);

    // var_dump($users);
    foreach ($users as $user) {
      echo
      '<p><b>Email:</b>' . $user->email . '</p>'
      '<p><b>Имя:</b>' .   $user->name . '</p>'
      '<p><b>Фамилия:</b>' . $user->surneme . '</p>';
      }

      // $sql = 'SELECT * FROM `users` WHERE `id` = :id';
      // $query = $pdo->prepare($sql);
      // $query->execute(['id' => $id]);
      // $user = $squery->fetch(PDO::FETCH_OBJ);
      //
      // echo $user->email;

      $sql = 'SELECT * FROM `users` WHERE `name` = :name' /*LIMIT 1 */;
      $query = $pdo->prepare($sql);
      $query->execute(['name' => $name]);
      $user = $squery->fetch(PDO::FETCH_OBJ);

      echo $user->name;
// ---------------------------------------------------------------------------
      // $login = 'codi999';
      // $email = 'test@test.ru';
      // $name = 'Влад';
      // $surname = 'Дударь';

      // $sql = 'INSERT INTO userl(login, email, name, surname) VALUES(?, ?, ?, ?)';


      // $sql = 'INSERT INTO userl(login, email, name, surname) VALUES(:login, :email, :name, :surname)';
      // $query = $pdo->prepare($sql);
      // $query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname]);

      // $id = 4;
      // $login = "new login";
      // $sql = 'UPDATE `users` SET `login` = :login WHERE `od` = :id ';
      // $query = $pdo->prepare($sql);
      // $query->execute(['login' => $login, 'id' => $id);

      // $id = 4;
      // $login = "new login";
      // $email ="test@testing.com";
      // $sql = 'UPDATE `users` SET `login` = :login `email` = :email WHERE `od` = :id ';
      // $query = $pdo->prepare($sql);
      // $query->execute(['login' => $login, 'email' => $email 'id' => $id);

      $id = 3;
      $sql = 'DELETE FROM `users` WHERE `id` = ? ';
      $query = $pdo->prepare($sql);
      $query->execute([$id]);
  ?>
</body>
</html>
