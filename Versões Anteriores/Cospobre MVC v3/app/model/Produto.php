<?php

class Produto {
    private $preco;
    private $categoria;
    private $tamanho;
    private $nome;
    private $img;

    function __construct(string $nome, string $preco, string $categoria, string $tamanho)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->tamanho = $tamanho;
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

        $stm = $con->prepare('INSERT INTO Produto ( nome,preco, categoria,tamanho) VALUES (:nome,:preco, :categoria, :tamanho)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':preco', $this->preco);
        $stm->bindValue(':categoria', $this->categoria);
        $stm->bindValue(':tamanho', $this->tamanho);
        $stm->execute();
    }

    static public function buscarProduto($nome)
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT nome, preco, categoria, tamanho FROM Produto WHERE nome = :nome');
        $stm->bindParam(':nome', $nome);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $produto = new Produto($resultado['preco'], $resultado['categoria']);
            $produto->categoria = $resultado['categoria'];
            return $produto;
        } else {
            return NULL;
        }
    }

    public function igual(string $nome)
    {
        return $this->nome === $nome ;
    }

}