<?php

class cat_produtoModel
{
    
    public $id, $descricao;

    public $rows;

    
    public function save()
    {
        include "DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        
        if(empty($this->id)) 
        {
            $dao->insert($this); 
        } else {
            $dao->update($this); 
        }
    }

    public function getAllRows()
    {
        include "DAO/cat_produtoDAO.php";
        $dao = new cat_produtoDAO();

        $this->rows = $dao->select();
    }

    
    public function getById(int $id)
    {
        include "DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new cat_produtoModel();

        
    }

    public function delete(int $id)
    {
        include "DAO/cat_produtoDAO.php";

        $dao = new cat_produtoDAO();

        $dao->delete($id);
    }
}