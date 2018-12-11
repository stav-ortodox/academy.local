<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>УСЛОЖНЕННОЕ ЗАДАНИЕ:</h1>
    <h2>
    <?php

  $GET_POST = ['Метод GET отправляет скрипту всю собранную информацию формы как часть URL', 'Метод POST передает данные таким образом, что пользователь сайта уже не видит передаваемые скрипту данные'];
  echo '<pre>';
  print_r($GET_POST);
    ?>
    </h2>
        <hr>
        <h1>GET - запрос:</h1>
    <h2>
        <form action="" method="get">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="surname" placeholder="Фамилия">
            <input type="number" name="age" placeholder="Возраст">
            <button type="submit">ОК!</button>
        </form>
        <?php
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $age = $_GET['age'];
        echo "Привет, меня зовут $name $surname, мой возраст $age лет (года)!";
        ?>
    </h2>

    <hr>

    <h1>POST - запрос:</h1>
    <h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="surname" placeholder="Фамилия">
            <input type="number" name="age" placeholder="Возраст">
            <button type="submit">ОК!</button>
        </form>
        <?php
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        echo "Привет, меня зовут $name $surname, мой возраст $age лет (года)!";


        ?>
    </h2>

</body>
</html>




