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