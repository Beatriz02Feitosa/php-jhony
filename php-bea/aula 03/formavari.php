<?php
# utilizar funçao number_format:

echo "formatação de variaveis numéricas <br>";

#definir variavel:
$val = 75.5; #<- tipo float 

echo "apresentação inicial sem formatação <br>";
echo "valor da variavel R$: $val";
echo"<br>";

#verificando o tipo de variavel utilizando var_dump()
echo "<br> verificando o tipo de variavel: ";
echo var_dump($val);
echo "<br>"; 

echo "apresentação com formatação <br>";
$valformat = number_format ($val, 2, '.','.');
echo "valor da variavel R$: $valformat";
?>