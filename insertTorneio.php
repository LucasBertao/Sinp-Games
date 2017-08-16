<?php
	include("conexao.php");

	$desc = $_GET['desc'];

	try{
	$sql = $con->prepare('INSERT INTO teste(descricao) VALUES(:descricao)');
	$sql->bindValue(':descricao', $desc);
	$sql->execute();
	}catch(Exception $e){
		echo $e->getMessage();
	}

?>