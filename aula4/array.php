<?php

echo"<pre>";

$array = ["Lucas", "4linux", "Joao"];
$array2 = array("Lucas", "4linux", "Joao");

print_r($array);
var_dump($array2);



$pessoa = ["Paulo",29,1.75];
print_r($pessoa);


echo "<hr>";

$pessoa = [
     "nome" => "Paulo",
     "Idade" => 29,
     "altura" => 1.80,
     "Estado Civil" => "Solteiro",
     "Escolaridade" => "Superior Completo",
     "Telefone" => 988289775,
];

print_r($pessoa);
//print_r($pessoa['nome']);