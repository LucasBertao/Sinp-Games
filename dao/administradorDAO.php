<?php
	require_once '../conexao.php';

class AdministradorDAO{

	private $con;

	public function __construct(){
		$conexao = new Conexao();
		$this->con = $conexao->getConexao();
	}	

	public function inserir($adm){
		$sql = 'INSERT INTO administrador(id_torneio, login, senha, email, nome) VALUES(:torneio, :login, :senha, :email, :nome)';
		$prep = $this->con->prepare($sql);
		$prep->bindValue(':torneio', $adm->getidTorneio());
		$prep->bindValue(':login', $adm->getLogin());
		$prep->bindValue(':senha', $adm->getSenha());
		$prep->bindValue(':email', $adm->getEmail());
		$prep->bindValue(':nome', $adm->getNome());
		$sql->execute();
	}
}
	
	