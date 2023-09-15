<?php 
#permite a comparação entre valores - diferença

// ref: https://www.w3schools.com/php/php_operators.asp
//manual do php: https://www.php.net/manual/pt-BR/language.operators.comparison.php

$a = (2 != 3); #true
$a = (100 <> 100); #false 
$a = (50 != '50'); #false
$a = (50 != 50); #false
$a = (50 !== '50'); #true #(numero 50 diferente da string 50)
#neste caso, é avaliado o  tipo de dado e não o seu valor

#ATENÇÃO
#nós não conseguimos visualizar o resultado (true/false)
#mas, podemos verificar sua existência
?>