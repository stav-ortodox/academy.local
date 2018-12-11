<?php

$a = 10;
$b = 5;

$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;

echo $c;
echo "<br/>";
echo $d;
echo "<br/>";
echo $e;
echo "<br/>";
echo $f;
echo "<br/>";
echo $g;

$x = 2;
$y = 5;
$a = 4;
$b = 0.5;
$c = 3;

echo "<br/>";
echo "<br/>";
$expression = ($x / $y + $a * $b) - ($c - $x) / $y;
echo $expression;


echo "<br/>";
echo "<br/>";


function myfunc($a, $b, $c=100){
    $res1 = $a + $b + $c;
    $res2 = $a - $b;
    $res3 = $res1 / $res2;
    $res4 = $res3 * $c;
    $array = [1 => $res1, 2 => $res2, 3 => $res3, 4 => $res4];
    return $array;
}

$result = myfunc ('450','30');
echo '<pre>';
print_r($result);







?>


