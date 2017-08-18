

<?php
	include("conexao.php");

	$torneio = $_GET['torneio'];
	$login = $_GET['login'];
	$senha = $_GET['senha'];
	$email = $_GET['email'];
	$nome = $_GET['nome'];


	$sql = $con->prepare('INSERT INTO administrador(id_torneio, login, senha, email, nome) VALUES(:torneio, :login, :senha, :email, :nome)');
	$sql->bindValue(':torneio', $torneio);
	$sql->bindValue(':login', $login);
	$sql->bindValue(':senha', $senha);
	$sql->bindValue(':email', $email);
	$sql->bindValue(':nome', $nome);
	echo "uai";
	$sql->execute();

?>
