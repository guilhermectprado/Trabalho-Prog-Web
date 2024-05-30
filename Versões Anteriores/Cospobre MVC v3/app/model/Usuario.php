<?php

class Usuario {
    private $email;
    private $senha;

    function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = hash('sha256', $senha);
    }

    public function __get($campo)
    {
        return $this->$campo;
    }

    public function __set($campo, $valor)
    {
        return $this->$campo = $valor;
    }

    public function salvar()
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Usuario ( email, senha) VALUES (:email, :senha)');
        $stm->bindValue(':email', $this->email);
        $stm->bindValue(':senha', $this->senha);
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