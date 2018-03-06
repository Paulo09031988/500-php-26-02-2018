<?php

function isParImpar ($num) {
	if ($num %2 == 0){
		return "Par";
	}else {
		return "Impar";
	}
}

echo isParImpar(3);


echo "<hr>";


function maior ($num1,$num2){
	if ($num1 == $num2){
		return "Os dois são iguais";
	}else if ($num1 > $num2){
		return $num1;
	}else {
		return $num2;
	}
}

echo maior(10,10);


echo "<hr>";


function maiorIdade($idade){
	if ($idade >= 18){
		return "Maior Idade";
	} else {
		return "Menor Idade";
	}
}

echo maiorIdade (17);


echo "<hr>";

function podeDirigir(array $pessoa){
	if ($pessoa['idade'] >= 18 && $pessoa('temHabilitacao')){
		return "Pode dirigir";
	} else {;
		return "Não pode dirigir";
	}
}

function podeDirigir2(int $idade, bool $temHabilitacao){
	if ($idade >= 18 && $temHabilitacao) {
		return "Pode Dirigir";
	} else {;
		return "Não Pode Dirigir";
	}	
}

$lucas = [
	'nome' => 'Lucas',
	'idade'=> 24,
	'temHabilitacao' => true
	];

echo podeDirigir($lucas);
echo podeDirigir($lucas['idade'],$lucas['temHabilitacao']);