<?php 
#apresentar soma de dois numeros inteiros
#utilizar operadores de incremento e decremento

$x = 2;
$z = 4;
$r = $x + $z;
echo 'resultado: ', $r;
echo '<br>';

if ($r % 2 == 0){
    $r += 1;
    echo $r;
} else {
    $r -= 1;
    echo $r;
}

?>