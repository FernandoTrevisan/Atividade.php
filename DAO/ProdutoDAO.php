<?php

class produtoDAO
{
    
    private $conexao;


   
    function __construct() 
    {
        
        $dsn = "mysql:host=127.0.0.1:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(produtoModel $model) 
    {
        
        $sql = "INSERT INTO produto 
                (nome, data_entrega, validade, saida, codigo_barras) 
                VALUES (?, ?, ?, ?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_entrega);
        $stmt->bindValue(3, $model->validade);
        $stmt->bindValue(4, $model->saida);
        $stmt->bindValue(5, $model->codigo_barras);
        
        
        $stmt->execute();      
    }

        
    public function update(produtoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, data_entrega=?, validade=?, saida=?, codigo_barras=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_entrega);
        $stmt->bindValue(3, $model->validade);
        $stmt->bindValue(4, $model->saida);
        $stmt->bindValue(5, $model->codigo_barras);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();
    }


    
    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/produtoModel.php';

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("produtoModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}