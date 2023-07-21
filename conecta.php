<?php
$ambiente = true;
if($ambiente){
	$dbname  = "mysql:dbname=caixaeletronico;host=localhost";
	$host    = "root";
	$user    = "";
}else{	
	$dbname  = "mysql:dbname=caixaeletronico;host=localhost";
	$host    = "root";
	$user    = "aluno";
}

try {
	$pdo = new PDO($dbname,$host,$user);
} catch (Exception $e) {
	echo "Erro de conexao!";
}
?>