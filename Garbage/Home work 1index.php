<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>PHP</title>
</head>
<body>
Форма регистрации
 <form  action="" method="post">
  <Label for="name">Имя</label>
  <input type="text" name="name" placeholder="John Doe"> <br>
  <Label for="email">email</label>
  <input type="email" name="email" placeholder="example@mail.com"> <br>
  <Label for="phone">Phone</label>
  <input type="phone" name="phone" placeholder="000777558822"> <br>


  <select name="cars[]" multiple="multiple" size="12">
  <option value="">-</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
  <option value="ford">Ford</option>
  <option value="kia">Kia</option>
  <option value="acura">Acura</option>
  <option value="lexus">Lexus</option>
  <option value="toyota">Toyota</option>
  <option value="linkoln">Linkoln</option>
  <option value="rollsrolls">RollsRolls</option>
</select>
<br>
<input type="text" name="films" placeholder="Matrix, Fast and Furious, etc.">
  <Label for="phone"> <br>Введите любимые фильмы. <br>(Вводить через запятую. Необходимо ввести по кране мере 2 фильма)</label> <br>
  <button  type="submit">Отправить</button>
 </form>
    <?php

       if (isset($_POST['name']))
        {
          if (strlen($_POST['name']) >= 3)
          {
          $name_f = trim(filter_var(_POST['name'], FILTER_SANITIZE_STRING));
          echo $name_f;
          }
          else
          {
            echo 'В поле "Имя" должно быть не менее 3-х символов' . "<br>";
          }
        }

        if (isset($_POST['email']))
         {
           if (strlen($_POST['email']) >= 5)
           {
            $email_f = trim(filter_var(_POST['email'], FILTER_SANITIZE_EMAIL));
            echo $email_f;
           }
           else
           {
             echo 'В поле "e-mail" должно быть не менее 5-х символов' . "<br>";
           }
         }
      #   $host = ksadnfjdbslkbNlkj #Соль
         md5($pass . $host);

        // else
        // 'необходимо заполнить поле "Имя"';
        // if ($name != false && $email != false && $phone != false) {
        // $empty_form_check = True;
        // echo "$name" . "$email" . "$phone" . "$cars";
        // echo $_POST['cars'][0];
        // echo $_POST['cars'][1];
        // echo $_POST['cars'][2];
        //
        // }
        // else {
        //   $first_check = false;
        // }
    ?>
</body>
</html>
