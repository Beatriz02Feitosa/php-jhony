<?php 
#permite a comparação entre valores - igualdade

// ref: https://www.w3schools.com/php/php_operators.asp
//manual do php: https://www.php.net/manual/pt-BR/language.operators.comparison.php

$a = (2 == 3);
$a = (100 == 100);
$a = (50 == '50'); // == não compara váriavel (aqui da true)
$a = (50 === '50'); // === compara váriavel (aqui da false)

#ATENÇÃO
#nós não conseguimos visualizar o resultado (true/false)
#mas, podemos verificar sua existência

echo $a;

#como solução vamos testar e expressar sua existência

if ($a){
    echo 'true';
    echo '<br>';
}else{
    echo 'false';
    echo '<br>';
}
?>