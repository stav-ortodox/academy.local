<?PHP
    echo "<table>";

    for($i = 1; $i <= 10; $i++) {
        echo'<tr>';
        for($j = 1; $j <= 10; $j++)
            echo '<td style="border: solid black 1px">',$j?$i?$i*$j:$j:$i,'</td>';
        echo'</tr>';
    }

    echo "</table>";


    echo "<br><h1>Таблица умножения как в школе:</h1><br>";


for ($num1 = 1; $num1 <= 10; $num1++) {
     echo "2 x $num1 = ", 2 * $num1 . "<br>";
 }

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
     echo "3 x $num1 = ", 3 * $num1 . "<br>";
 }

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "4 x $num1 = ", 4 * $num1 . "<br>";
}

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "5 x $num1 = ", 5 * $num1 . "<br>";
}

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "6 x $num1 = ", 6 * $num1 . "<br>";
}

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "7 x $num1 = ", 7 * $num1 . "<br>";
}

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "8 x $num1 = ", 8 * $num1 . "<br>";
}

echo'<br>';
for ($num1 = 1; $num1 <= 10; $num1++) {
    echo "9 x $num1 = ", 9 * $num1 . "<br>";
}


echo "<br><h1>Бесконечный цикл:</h1><br>";

for($i=1;;$i++){

    if($i*$i>100){
        echo '<br> бесконечный цикл прерван командой break!';
        break;

    }

    echo $i*$i .'<br>';

}






?>