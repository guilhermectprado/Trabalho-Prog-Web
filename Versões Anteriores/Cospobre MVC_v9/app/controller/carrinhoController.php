<?php 

namespace App\Controller;
use App\Model\Carrinho;
use App\Model\Produto;
use App\Model\Usuario;
use PDOException;

/**
* Esta classe estende a classe abstrata Controller
* e
* é responsável por chamar a view correta para os tratamentos do carrinho
* de produtos do usuário logado
* passando os produtos fornecidos pelo usuário. 
*/
class carrinhoController extends Controller  {
    
    /**
    * 
    * @var Usuario O usuário que será chamado (ou cadastrado)
    */
    private $loggedUser;
    /**
    * 
    * @var Carrinho O carrinho do usuário
    */
    private $carrinho;
    
    /**
    *  Este método cria uma sessão
    * a qual irá o carrinho e verificar se está logado.
    */
    function __construct() {
       /* session_start();*/
       if (isset($_SESSION['user'])) {
        $this->loggedUser = $_SESSION['user'];
        $_SESSION['carrinho'] = $_SESSION['user']->carrinho;
        
        
       }
       
    }
    
/**vai para o carrinho, mesmo que não tenho produtos ainda */
    public function carrineo()
    {
        if (!$this->loggedUser) {
            
            header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
            return;
        }
            $this->view('carrinho/carrinho',$_SESSION['user']->produtosEscolhidos);
        
        
    }
    
/**adiciona um produto ao carrinho e exibe o carrinho */
    public function chart()

    {   if (!$this->loggedUser) {
            
        header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
        return;
    }
        $nome = $_GET['produto'];
        $produto = Produto::buscarProduto($nome);
        $_SESSION['carrinho']->salvaP($produto);
        $arraypls = $_SESSION['carrinho']->produtosEscolhidos;
        if($produto){
            $this->view('carrinho/carrinho',$arraypls);
        }   
     
        
        
    }
   
/**vai para o pagamento */

    public function cartao()
    {  if ($_GET['cartao'] =='credito'){
        $this->view('carrinho/cartaoCredito');
    }else if ($_GET['cartao'] =='debito'){
        $this->view('carrinho/cartaoDebito');
    }
        
    }
/**sucessos para a home */
    public function sucessoCredito()
    {  $_SESSION['carrinho']->limpaCarrinho();
        
        
        header('Location: ' . BASEPATH . 'home?mensagem=Compra no crédito feita com sucesso!!');
    }
    public function sucessoDebito()
    { 
        $_SESSION['carrinho']->limpaCarrinho();
        header('Location: ' . BASEPATH . 'home?mensagem=Compra no débito feita com sucesso!!');
    }
    
}


    ?>