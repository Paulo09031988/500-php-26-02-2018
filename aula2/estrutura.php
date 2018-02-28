<?php

echo "<pre>";

$a = " Marcos Lucas";

if ($a == "Lucas"){
	echo "olá Lucas";
} else if ($a == "Marcos"){
	echo " Ola Marcos";
} else {
	echo "olá estranho";
}


echo "<hr>";

$idade = 19;

// Maior de 18 voto é obrigatorio
// 16 e <18 voto opcional
// < 16 não vota

if ($idade >= 18 && $idade < 60) {
	echo "voto obrigatorio";
} else if ($idade >= 16 || $idade >= 60){
	echo "Voto opcional";
} else if ($idade < 16){
	echo "Não Vota";
} else {
	echo "Idade Invalida";
}

echo "<br>";
$num;
// Se o munero dividor por 2 e resto da divisão = 0
// Modulo % -> retorno o resto da divisao
if ($num % 2 === 0){
	echo "Par";
} else {
	echo "Impar";
}