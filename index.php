<?php
session_start();
require 'conecta.php';
if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
	$id = $_SESSION['banco'];

	$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
	$sql->bindValue("id",$id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$info = $sql->fetch();
	}else{
		header("location: login.php");
		exit;
	}
	
}else{
		header("location: login.php");
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletronico</title>
</head>
<body>
	<h1>Brothers Bank</h1>
	Titular:<?php echo $info['Titular'];?> <br>
	Agencia:<?php echo $info['Agencia'];?><br>
	Conta:<?php   echo $info['Conta']  ;?><br>	
	Saldo:<?php   echo $info['Saldo']  ;?><br><br>
	<a href="Sair.php">Sair</a>

</body>
</html>