<?php
class Conexao {
    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "sinpGames";
    private $conexao;

    public function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=$this->servidor;dbname=$this->banco", $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //  echo "Conectou !!! ";
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
    
    public function getConexao() {
        return $this->conexao;
    }
}

new Conexao();
?>
