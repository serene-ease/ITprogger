<?php
$name = trim(filter_var($_POST['name'], FILTER._SANITIZE_STRING));
$phone = trim(filter_var($_POST['phone'], FILTER._SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER._SANITIZE_STRING));
$comment = trim(filter_var($_POST['comment'], FILTER._SANITIZE_STRING));

$error = '';

if(strlen($name) <= 3)
    $error = 'Введите Имя'










?>