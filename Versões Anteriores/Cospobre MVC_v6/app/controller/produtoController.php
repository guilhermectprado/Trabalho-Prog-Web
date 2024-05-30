<?php 

namespace App\Controller;

use App\Model\P\Produto;
use App\Model\Usuario;
use PDOException;

/**
* Esta classe estende a classe abstrata Controller
* e
* é responsável por chamar a view correta para os tratamentos de login/
* informações/cadastro de usuários
* passando os dados fornecidos pelo usuário. 
*/
class produtoController extends Controller  {
    
    /**
    * 
    * @var Usuario O usuário que será chamado (ou cadastrado)
    */
    private $loggedUser;
    
    /**
    *  Este método cria uma sessão
    * a qual irá armazenar o(s) usuário(s).
    */
    function __construct() {
       /* session_start();*/
       if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
    }
    

    
    
    public function acessories()
    {
        $produtos = Produto::buscarCategoria("Acessórios");
        $this->view('acessorios',$produtos);
    }
    public function peruquitas()
    {   $produtos = Produto::buscarCategoria("Peruca");
        $this->view('peruca',$produtos);
    }
    
       
    
    public function descricao()

    {  $nome = $_GET['peruca'];
        $produto = Produto::buscarProduto($nome);
        $produtos = [];
        array_push($produtos,$produto);
        $prod = Produto::buscarProdutos();
        shuffle($prod);
        for ($i = 0; $i < 3; $i++) {
            array_push($produtos,$prod[$i]);}
        if($produtos){
            $this->view('descricao',$produtos);
        }else{
            header('Location: ' . BASEPATH . 'wigs');
        }
        
        
        
     
        
        
    }
    public function chart()

    {   if (!$this->loggedUser) {
            
        header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
        return;
    }
        $nome = $_GET['produto'];
        $produto = Produto::buscarProduto($nome);
        $_SESSION['user']->salvaP($produto);
        $arraypls = $_SESSION['user']->produtosEscolhidos;
        if($produto){
            $this->view('carrinho',$arraypls);
        }   
     
        
        
    }
   


    public function rec()
    {
        $produtos = Produto::buscarProdutos();
        shuffle($produtos);
        
        $this->view('recomendado', $produtos);
    }

    
    
}


    ?>