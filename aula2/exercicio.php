<?php

//nota
// fre

 

$nota = readline("Digite a nota: ");
$frequencia = readline(" digite a frenquencia: ");

if ($nota >= 7 && $frenquencia >= 8){
	echo "Aprovado";
} else if ($nota >= 5 && $nota< 7 && $frenquencia >= 8){
	echo "Recuperacao";
}else if ($nota < 5 || $frenquencia < 8 ){
	echo "Reprovado";
}

echo "\n";


switch (true) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}