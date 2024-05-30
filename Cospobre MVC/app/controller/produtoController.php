<?php 

namespace App\Controller;

use App\Model\Produto;
use PDOException;

/**
* Esta classe estende a classe abstrata Controller
* e
* é responsável por chamar a view correta para os tratamentos de listagens/
* informações de produtos
* Posteriormente trataria cadastro de produtos (nessa etapa, foram feitos no banco diretamente)
*/
class produtoController extends Controller  {
    
    function __construct() {
      
    }

   /**listagem de acessórios */ 
    public function acessories()
    {
        $produtos = Produto::buscarCategoria("Acessórios");
        $this->view('produto/produtos',$produtos);
    }

    /**listagem de perucas */
    public function peruquitas()
    {   $produtos = Produto::buscarCategoria("Perucas");
        $this->view('produto/produtos',$produtos);
    }
    /**listagem de conjuntos */
    public function conjuntinhos()
    {   $produtos = Produto::buscarCategoria("Conjuntos");
        $this->view('produto/produtos',$produtos);
    }
    /**listagem de sapatos */
    public function sapatitos()
    {   $produtos = Produto::buscarCategoria("Sapatos");
        $this->view('produto/produtos',$produtos);
    }

       
    /**descrição do produto e os recomendados*/
    public function descricao()
    {   $nome = $_GET['prod'];
        $produto = Produto::buscarProduto($nome);
        $produtos = [];
        array_push($produtos,$produto);
        $prod = Produto::buscarProdutos();
        shuffle($prod);
        for ($i = 0; $i < 3; $i++) {
            array_push($produtos,$prod[$i]);}
        if($produtos){
            $this->view('produto/descricao',$produtos);
        }else{
            header('Location: ' . BASEPATH . 'wigs');
        }
    }

    public function lista() /* listagem de produtos cadastrados pro admin*/
        {  
            $produtos = Produto::buscarProdutos();
            $this->view('produto/listarProdutos', $produtos);
    }

    public function busca()  /* pesquisa de produtos do usuário*/
        {  
            $produtos = Produto::buscarComFiltro("%".trim($_GET['buscar'])."%");
            $this->view('produto/buscados', $produtos);
    }

}

?>