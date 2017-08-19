<?php
	require_once '../class/administrador.php';
	require_once '../dao/administradorDAO.php';
	$adm = new Administrador();
	$dao = new AdministradorDAO();

	$adm->setidTorneio($_GET['torneio']);
	$adm->setLogin($_GET['login']);
	$adm->setSenha($_GET['senha']);
	$adm->setEmail($_GET['email']);
	$adm->setNome($_GET['nome']);

	$dao->inserir($adm);

	echo $adm->getidTorneio();
	echo $adm->getLogin();
	echo $adm->getSenha();
	echo $adm->getEmail();
	echo $adm->getNome();
?>
