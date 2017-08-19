<?php
	include("conexao.php");

	$desc = $_GET['desc'];
	$inicio = $_GET['inicio'];
	$term = $_GET['term'];

	try{
	$sql = $con->prepare('INSERT INTO torneio(descricao, inicio, termino) VALUES(:descricao, :inicio, :termino)');
	$sql->bindValue(':descricao', $desc);
	$sql->bindValue(':inicio', $inicio);
	$sql->bindValue(':termino', $term);
	$sql->execute();
	}catch(Exception $e){
		echo $e->getMessage();
	}

?>