<?php

echo "<pre>";

function negrito(){
	echo "<strong>negrito</strong> <br>";
}

negrito();


function italico($valor = "valor", $valor2 = "valor2"){
	echo "<i><b>{$valor} - {$valor2}</b></i><br>";
}

italico("Italico");
italico("4linux");
italico("Paulo");
italico("um par", "dois par");
italico();

echo "<hr>";

function quadrado($num){
	return $num * $num;
}

$var = quadrado(155);
echo $var;


echo "<hr>";


$taxa = 1.09;

function taxar($valor){
	global $taxa;
	return $valor + $taxa;
}

echo taxar(10);


echo "<hr>";


function adicionar(&$fruta){
	return ++$fruta;
}	

$laranjas = 5;
adicionar($laranjas);
echo $laranjas;


echo "<hr>";


//$array = [1,2,3,4,5,6];
//$pares = array_filter($array, function($valor)){
	
$fun = function(){
	echo "Ola 4linux";
};

$fun();