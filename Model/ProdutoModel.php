<?php

class produtoModel
{
    public $rows;
    public $id, $nome, $data_entrega, $validade;
    public $saida, $codigo_barras;
    

   
    public function save()
    {
        include 'DAO/produtoDAO.php';

        $dao = new produtoDAO();

        
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }
    }
       
    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php'; 
        
        
        $dao = new produtoDAO();

        
        $this->rows = $dao->select();
    }


    
    public function getById(int $id)
    {
        include 'DAO/produtoDAO.php'; 

        $dao = new produtoDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new produtoModel(); 

        
    }


    
    public function delete(int $id)
    {
        include 'DAO/produtoDAO.php'; 

        $dao = new produtoDAO();

        $dao->delete($id);
    }  






}



