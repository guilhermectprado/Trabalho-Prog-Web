<?php

namespace App\Model;

use App\Database;

class Usuario {
    private $nome;
    private $dataNascimento;
    private $endereco;
    private $cep;
    private $telefone;
    private $email;
    private $senha;
    private $subscribe;
    private $carrinho;
/* construtor do usuário: 
*peculiaridade-> subscribe pode ser NULL (não ticou o botão) e significa que não quer se cadastrar para novidades*/
    function __construct(string $nome, string $dia,string $mes,string $ano, string $endereco, string $cep, string $telefone, string $email, string $senha, ?string $subscribe)
    {
        $this->nome = $nome;
        $temp = $dia . "/". $mes ."/" . $ano;
        $this->dataNascimento = $temp;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = hash('sha256', $senha);
        if ($subscribe =='newsletter'){
            $this->subscribe = 1; /* recebe novidades*/
        }else if ($subscribe == NULL){
            $this->subscribe = 0; /* não recebe novidades*/
        } 
        $this->carrinho = new Carrinho($this); /* invoca o construtor do carrinho e passa essa instância de usuário (composição) */
    }
    

    public function __get($campo)
    {
        return $this->$campo;
    }

    public function __set($campo, $valor)
    {
        return $this->$campo = $valor;
    }
    
    public function salvar() /**cadastra no banco */
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Usuarios ( nome, datanasc, endereco, cep, telefone,email, senha, subscribe) 
        VALUES (:nome, :datanasc,:endereco,:cep,:telefone,:email, :senha, :subscribe)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':datanasc', $this->dataNascimento);
        $stm->bindValue(':endereco', $this->endereco);
        $stm->bindValue(':cep', $this->cep);
        $stm->bindValue(':telefone', $this->telefone);
        $stm->bindValue(':email', $this->email);
        $stm->bindValue(':senha', $this->senha);
        $stm->bindValue(':subscribe', $this->subscribe);
        $stm->execute();
    }

    static public function buscarUsuario($email) /**busca o usuário via email */
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT * FROM Usuarios WHERE email = :email');
        $stm->bindParam(':email', $email);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $dia = substr($resultado['datanasc'], 0, 2);
            $mes = substr($resultado['datanasc'], 3, 2);
            $ano = substr($resultado['datanasc'], 6, 4);
            $usuario = new Usuario($resultado['nome'],$dia,$mes,$ano,$resultado['endereco'],$resultado['cep'],$resultado['telefone'],$resultado['email'], $resultado['senha'],$resultado['subscribe']);
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
    static public function buscarTodos(): array /**retorna todos os usuários no banco */
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT nome, datanasc, endereco, cep, telefone,email, senha, subscribe FROM Usuarios');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            
            $dia = substr($resultado['datanasc'], 0, 2);
            $mes = substr($resultado['datanasc'], 3, 2);
            $ano = substr($resultado['datanasc'], 6, 4);
            $usuario = new Usuario($resultado['nome'],$dia,$mes,$ano,$resultado['endereco'],$resultado['cep'],$resultado['telefone'],$resultado['email'], $resultado['senha'],$resultado['subscribe']);
            $usuario->senha = $resultado['senha'];
            array_push($resultados, $usuario); 
        }

        return $resultados;
    } 
}