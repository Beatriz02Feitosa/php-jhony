<?php
#operador = são simbolos que permitem executar operações matemáticas e lógica
#sinal de "=" - atribuição
$variavel = 100;
echo $variavel;

$a =10;
$b = 20;
$x = $y = $z = 100; #instanciando ao mesmo tempo

$resul = $a + $b; #resultado precisa dar 30
echo $resul, "<br>";

$resul = $a + 100; #precisa dar 110
echo $resul, "<br>";

$result = $a +10 +$z + 10; #precisa dar 130
echo $result, "<br>";
?>