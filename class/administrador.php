<?php

class Administrador {

    private $idTorneio;
    private $login;
    private $senha;
    private $email;
    private $nome;

    public function setidTorneio($idTorneio){
        $this->idTorneio = $idTorneio;
    }

    public function getidTorneio(){
        return $this->idAdm;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin($login){
        return $this->login;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}