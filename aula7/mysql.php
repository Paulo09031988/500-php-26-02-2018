<?php


$host = "localhost";
$user = "paulo";
$pass = "@da4linux";
$db   = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

var_dump($conexao);