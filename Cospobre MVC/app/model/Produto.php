<?php
namespace App\Model;
use App\Database;
class Produto {
    private $nome;
    private $preco;
    private $categoria;
    private $tamanho;
    private $img;
    private $material;
    private $cor;
    private $tt;
/* construtor*/
    function __construct(string $nome, string $preco, string $categoria, string $tamanho, string $img, string $material, string $cor, string $tt)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->tamanho = $tamanho;
        $this->img = $img;
        $this->material = $material;
        $this->cor = $cor;
        $this->tt = $tt;
        
    }

    public function __get($campo)
    {
        return $this->$campo;
    }

    public function __set($campo, $valor)
    {
        return $this->$campo = $valor;
    }

    public function salvar() /*não usado nessa fase, mas já pronto para salvar produtos no banco. Os produtos foram inseridos diretamente.*/
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Produto (nome, preco, categoria, tamanho, img) VALUES (:nome,:preco, :categoria, :tamanho, :img, :quantidade)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':preco', $this->preco);
        $stm->bindValue(':categoria', $this->categoria);
        $stm->bindValue(':tamanho', $this->tamanho);
        $stm->bindValue(':img', $this->img);

        $stm = $con->prepare('INSERT INTO Descricao (produto, material, cor, tt) VALUES (:produto,:material, :cor, :tt)');
        $stm->bindValue(':produto', $this->nome);
        $stm->bindValue(':material', $this->material);
        $stm->bindValue(':cor', $this->cor);
        $stm->bindValue(':tt', $this->tt);
        $stm->execute();
    }

    static public function buscarProduto($nome) /* retorna o produto com dado nome*/
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT nome, preco, categoria, tamanho, img, material, cor, tt FROM Produto JOIN Descricao ON nome = produto WHERE nome = :nome');
        $stm->bindParam(':nome', $nome);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],$resultado['material'],$resultado['cor'],$resultado['tt']);
        
            return $produto;
        } else {
            return NULL;
        }
    }

    static public function buscarProdutos()  /* retorna todos os produtos no banco*/
    {
        $con = Database::getConnection();
        
        $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto;');
        $stm->execute();
        $resultados = [];
        while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],  $resultado['material'], $resultado['cor'], $resultado['tt']);
            array_push($resultados, $produto); 
        }
        return $resultados;
    }
    
    static public function buscarCategoria($categoria) /* retorna todos os produtos de dada categoria */
    {
        $con = Database::getConnection();
        
        $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto WHERE categoria = :categoria');
        $stm->bindParam(':categoria', $categoria);
        $stm->execute();

        $resultados = [];
        while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],$resultado['material'],$resultado['cor'],$resultado['tt']);
            array_push($resultados, $produto); 
        }

        return $resultados;  
    }

    static public function buscarComFiltro($info)  /* retorna produtos relacionados à pesquisa do usuário*/
    {
        $con = Database::getConnection();
        /*procura pelo nome*/
        $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto where nome LIKE :nome;');
        $stm->bindParam(':nome', $info);
        $stm->execute();
        $resultados = [];
        while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],  $resultado['material'], $resultado['cor'], $resultado['tt']);
            array_push($resultados, $produto); 
        }
        /* procura pela categoria se não achou pelo nome*/
        if (is_null($resultados) || count($resultados) === 0){
            $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto where categoria LIKE :categoria;');
            $stm->bindParam(':categoria', $info);
            $stm->execute();
            while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],  $resultado['material'], $resultado['cor'], $resultado['tt']);
            array_push($resultados, $produto); 
            }
        }
        /* procura pela cor se não achou pelo nome ou categoria*/
        if (is_null($resultados) || count($resultados) === 0){
            $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto where cor LIKE :cor;');
            $stm->bindParam(':cor', $info);
            $stm->execute();
            while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],  $resultado['material'], $resultado['cor'], $resultado['tt']);
            array_push($resultados, $produto); 
            }
        }
        /* procura pela caracterítica específica se não achou pelo nome ou categoria ou cor*/
        if (is_null($resultados) || count($resultados) === 0){
            $stm = $con->prepare('SELECT  nome, preco, categoria, tamanho, img , material, cor, tt FROM Produto JOIN Descricao ON nome = produto where tt LIKE :tt;');
            $stm->bindParam(':tt', $info);
            $stm->execute();
            while ($resultado = $stm->fetch()) {
            
            $produto = new Produto($resultado['nome'],$resultado['preco'], $resultado['categoria'], $resultado['tamanho'],  $resultado['img'],  $resultado['material'], $resultado['cor'], $resultado['tt']);
            array_push($resultados, $produto); 
            }
        }
        return $resultados;
    }

    public function igual(string $nome)
    {
        return $this->nome === $nome ;
    }

}