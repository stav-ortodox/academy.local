<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.12.2018
 * Time: 11:19
 */
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
    <h2>
    <?php

    $a = 0;
    echo $a . " --- Создайте переменную и присвойте ей значение 0;";
    echo "<br/><br/>";

    $a += 20;

    echo $a . " --- увеличьте значение переменной на 20;";
    echo "<br/><br/>";

    $a *= 2;

    echo $a . " --- увеличьте его в два раза;";
    echo "<br/><br/>";

    $a -= 4;

    echo $a . " --- уменьшите на 4;";
    echo "<br/><br/>";

    $a /= 9;

    echo $a . " --- разделите на 9;";
    echo "<br/><br/>";

    $a *= $a;

    echo $a . " --- возведите в квадрат;";
    echo "<br/><br/>";

    $a %= 7;

    echo $a . " --- найдите остаток от деления на 7;";
    echo "<br/><br/>";

    echo "<br/><hr><br/>";

    $i_like = 'Я люблю';

    echo $i_like;
    echo "<br/><br/>";

    $i_like .= ' изучать';

    echo $i_like . " --- измените значение переменной, присоединив к нему строку 'изучать';";
    echo "<br/><br/>";

    $i_like .= ' PHP';

    echo $i_like . " --- еще раз измените значение  переменной, присоединив к ней строку 'PHP';";
    echo "<br/><br/>";

    ?>
    </h2>
</body>
</html>




?>