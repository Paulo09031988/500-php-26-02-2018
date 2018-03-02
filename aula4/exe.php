<?php


// Array  $pessoa -> Nome, idade, email.
// Exibir na tela o conteudo de cada informação seguindo o exemplo: 'eu nome é:'; 'tenho $x anos'; 'mwu email é:;'
// array pessoas onde teremos 3 pessoas.
// cada pessoa possui Nome, idade e Email.

echo "<pre>";

$pessoa = [
     "nome" => "Paulo",
     "Idade" => 29,
     "Email" => "zete_a@hotmail.com",
];

print_r($pessoa);
//print_r($pessoa['nome']);


echo "<hr>";

$pessoas =[
			 [
		     "nome" => "Carlos",
		     "Idade" => 18,
		     "Email" => "carlos_silva@hotmail.com",
		],
		[
     "nome" => "Carlos",
     "Idade" => 18,
     "Email" => "carlos_silva@hotmail.com",
],
[
     "nome" => "Carlos",
     "Idade" => 18,
     "Email" => "carlos_silva@hotmail.com",
]
];

echo "<hr>";

foreach ($pessoas as $pessoa) {
	echo $pessoa['nome'] . "\n";
	echo $pessoa['idade'] . "\n";
	echo $pessoa['email'] . "\n";

}