<?php if($_COOKIE['log'] == '') {header('Location: ./ref.php')} ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet">
  <title>Главная</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css"
    integrity="sha512-wpPYUAdjBVSE4KJnH1VR1HeZfpl1ub8YT/NKx4PuQ5NmX2tKuGu6U/JRp5y+Y8XG2tV+wKQpNHVUX03MfMFn9Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="./css/main.css" rel="stylesheet" />
</head>
<body>
<?php require './php-markup/shared/header.php' ?>
<main>
<?php require './php-markup/index/hero.php' ?>
<?php require './php-markup/index/features.php' ?>
<?php require './php-markup/index/dirrections.php' ?>
<?php require './php-markup/index/team.php' ?>
<?php require './php-markup/index/clients.php' ?>
</main>
<?php require './php-markup/shared/footer.php' ?>
<?php require './php-markup/shared/modal.php' ?>
<script src="./js/modal.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/body-scroll-lock/3.1.5/bodyScrollLock.min.js"
  integrity="sha512-HowizSDbQl7UPEAsPnvJHlQsnBmU2YMrv7KkTBulTLEGz9chfBoWYyZJL+MUO6p/yBuuMO/8jI7O29YRZ2uBlA=="
  crossorigin="anonymous"></script>
<script src="./js/menu.js"></script>

</body>

</html>