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
/**ainda não implementado, mas persistiria o carrinho no banco (armazenaaria a compra feita do usuário) */
    public function salvar()
    {
        
    }
    /**guarda o produto escolhido no carrinho */
    public function salvaP($produto)
    {
        array_push($this->produtosEscolhidos,$produto);
    }
    /**limpa o carrinho*/
    public function limpaCarrinho()
    {
        $this->produtosEscolhidos = [];
        
    }
    

}