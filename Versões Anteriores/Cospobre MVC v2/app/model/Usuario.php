<?php

use App\Database;

class Usuario {
    private $nome;
    private $dia;
    private $mes;
    private $ano;
    private $endereo;
    private $cep;
    private $telefone;
    private $email;
    private $senha;
    private $subscribe;

    function __construct(string $nome, string $dia, string $mes, string $ano, string $endereco, string $cep, string $telefone, string $email, string $senha, bool $subscribe) {
        $this->nome = $nome;
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = hash('sha256', $senha);
        $this->subscribe = $subscribe;
    }

    public function __get($campo) {
        return $this->$campo;
    }

    public function __set($campo, $valor) {
        return $this->$campo = $valor;
    }

    public function salvar() {
        $con = Database::getConnection();

        $data = "$dia . / . $mes . / . $ano";
        $datanasc = implode("-",array_reverse(explode("/", $data)));

        $stm = $con->prepare('INSERT INTO usuario (nome, datanasc, endereco, cep, telefone, email, senha, subscribe) VALUES (:nome, :datanasc, :endereco, :cep, :telefone, :email, :senha, :subscribe)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':datanasc', $this->datanasc);
        $stm->bindValue(':endereco', $this->endereco);
        $stm->bindValue(':cep', $this->cep);
        $stm->bindValue(':telefone', $this->telefone);
        $stm->bindValue(':email', $this->email);
        $stm->bindValue(':senha', $this->senha);
        $stm->bindValue(':subscribe', $this->subscribe);
        $stm->execute();
    }

    static public function buscarUsuario($email)
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT email, senha FROM Usuarios WHERE email = :email');
        $stm->bindParam(':email', $email);
        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $usuario = new Usuario($resultado['email'], $resultado['senha']);
            $usuario->senha = $resultado['senha'];
            return $usuario;
        } else {
            return NULL;
        }
    }

    public function igual(string $email, string $senha)
    {
        return $this->email === $email && $this->senha === hash('sha256', $senha);
    }

}