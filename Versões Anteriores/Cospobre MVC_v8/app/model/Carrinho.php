<?php
namespace App\Model;
use App\Database;
class Carrinho {
    private $usuario;
    private $produtosEscolhidos;
    

    function __construct(Usuario $user)
    {   $this->usuario = $user;
        $this->produtosEscolhidos=[];
        
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
        
    }
    public function salvaP($produto)
    {
        array_push($this->produtosEscolhidos,$produto);
    }
    public function limpaCarrinho()
    {
        $this->produtosEscolhidos = [];
        
    }
    

}