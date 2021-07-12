<?php
class Usuario{

    private $idUsuario;
    private $nome;
    private $email;
    private $senha;

    function getIdUsuario() {
        return $this->idUsuario;
    }
    function getNome() {
        return $this->nome;
    }
    function getEmail() {
        return $this->email;
    }
    function getSenha() {
        return $this->senha;
    }
    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }

    // CRUD C
    function inserirUsuario() {
        include("conexaoBD.php");
        $comando = "INSERT INTO users (NOME,EMAIL,SENHA) VALUES (?,?,?);";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->email);
        $resposta->bindValue(3, $this->senha);
        $resposta->execute();
    }

    // CRUD R
    function consultarUsuario($idUsuario) {
        include("conexaoBD.php");
        $comando = "SELECT * FROM users WHERE (IDUSERS=?);";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $idUsuario);
        $PDO->exec("SET CHARACTER SET utf8");
        $resposta->execute();
        foreach ($resposta as $registro) {
            $this->idUsuario = $registro["IDUSERS"];
            $this->nome = $registro["NOME"];
            $this->email = $registro["EMAIL"];
            $this->senha = $registro["SENHA"];
        }
    }

    // CRUD U
    function alterarUsuario() {
        include("conexaoBD.php");
        $comando = "UPDATE users SET NOME=?,EMAIL=?,SENHA=? WHERE IDUSERS=?;";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $this->nome);
        $resposta->bindValue(2, $this->email);
        $resposta->bindValue(3, $this->senha);
        $resposta->bindValue(4, $this->idUsuario);
        $resposta->execute();
    }

    // CRUD D
    function excluirUsuario() {
        include("conexaoBD.php");
        $comando = "DELETE FROM users WHERE IDUSERS=?;";
        $resposta = $PDO->prepare($comando);
        $resposta->bindValue(1, $this->idUsuario);
        $resposta->execute();
    }
}
?>