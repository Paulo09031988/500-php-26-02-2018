<?php

echo "<pre>";

$nomes = ["Lucas", "4linux", "Joao"];

$i = 0;
foreach ($nomes as $nome) {
	echo ++$i . $nome .  "\n";
}

echo "<hr>";

$pessoa  = [
	"nome" => "lucas",
	"idade" => 24,
	"altura" => 1.80	
];

foreach ($pessoa as $valor) {
	echo $valor . "\n";
}

echo "<hr>";

var_dump($pessoa);
foreach ($pessoa as $chave => $valor) {
	//echo "$chave -> $valor \n";
	if ($chave == 'nome'){
		echo valor;
	}
}

echo $pessoa['nome'];
}


