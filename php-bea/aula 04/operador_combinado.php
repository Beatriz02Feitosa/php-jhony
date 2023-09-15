<?php 
#operador de atribuição combinado 
#permitem que alteremos o valor de uma variavel a partir do valor original
#exemplo: +=; -=; *=

#SEM combinado
$x = 10;

echo '<br>';
echo $x;

$x = $x + 10; #resultado é 20

echo '<br>';
echo $x;

$x = $x - 7; #resultado é 13

echo '<br>';
echo $x;

$x = $x * 2; #resultado é 26

echo '<br>';
echo $x;

$x = $x / 2; #resultado é 13

echo '<br>';
echo $x;

echo '<br>';

#COM combinado
$x = 10; #reiniciou a variavel
echo '<br>';
echo $x;

$x += 10; #20
echo '<br>';
echo $x;

$x -= 7; #13
echo '<br>';
echo $x;

$x *= 2; #26
echo '<br>';
echo $x;

$x /= 2; #13
echo '<br>';
echo $x;


?>