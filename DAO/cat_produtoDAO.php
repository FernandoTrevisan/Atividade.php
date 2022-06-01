<?php

class cat_produtoDAO
{
    private $conexao;

    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

    
    public function insert(cat_produtoModel $model)
    {
        
        $sql = "INSERT INTO categoria_produto (descricao) values (?)";
        
        $stmt= $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();
    }

    public function update(cat_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET descricao=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS); 
    }

    public function selectById(int $id)
    {
        include_once "Model/cat_produtoModel.php";

        $sql = "SELECT * FROM categoria_produto WHERE id =?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        
        return $stmt->fetchObject("cat_produtoModel"); 
                                                       
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto where id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}