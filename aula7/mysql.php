<?php


$host = "localhost";
$user = "paulo";
$pass = "@da4linux";
$db   = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

$query = INSERT INTO posts (usuario_id,post)
	VALUES (4, 'Escrevendo mais posts');


	//msqli_query($conexao,$query);

$query = "SELECT * FROM posts";

$result = msqli_query($conexao,$query);

echo "<pre>";
while ($row = mysql_fetch_assoc($result)){
	print_r($row);
}	