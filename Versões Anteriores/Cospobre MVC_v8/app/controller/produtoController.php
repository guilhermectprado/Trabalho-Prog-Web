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
        $this->view('acessorios',$produtos);
    }
       /**listagem de perucas */
    public function peruquitas()
    {   $produtos = Produto::buscarCategoria("Peruca");
        $this->view('peruca',$produtos);
    }
     /**posteriormente seriam feitas as de lentes, sapatos, conjuntos.... seguem a mesma ideia (Poderia ser até um 
      * mesmo método redirecionando para todas de acordo com a necessidade -- evitar repetição de código
      * ) */
       
       /**descrição do produto */
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
   



    
    
}


    ?>