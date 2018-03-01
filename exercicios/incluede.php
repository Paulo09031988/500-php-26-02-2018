<?php

echo "<pre>";
$cont = 0;

while ($cont <= 10) {
	echo $cont;
	echo  " - Paulo \n";

	if ($cont == 1){
		echo "Legal";
	}
	$cont++;
}

echo "Acabou";

echo "<hr>";

echo "<pre>";

$cont = 20;

do {
	echo $cont;
	$cont++;
} while ($cont <= 10);

echo " - Acabou \n";


echo "<hr>";
echo "<pre>";
for ($cont = 0; $cont <= 30; $cont++){
	echo $cont . "\n";
}


echo "<pre>";
for ($cont = 30; $cont >= 0; $cont--){
	echo $cont . "\n";
}



echo "<hr>";
echo "<pre>";
for ($cont = 10; $cont <= 50; $cont++){
	if ($cont == 5){
		continue;
	}
	echo $cont . "\n";
}
for ($cont = 200; $cont <= 300; $cont++){
	if ($cont == 227){
		break;
	}
	echo $cont . "\n";
}