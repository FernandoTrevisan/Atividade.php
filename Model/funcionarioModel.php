<?php

class funcionarioModel
{
    
    public $id, $nome, $cargo ;

    public $rows;

   
    public function save()
    {
        include 'DAO/funcionarioDAO.php';

        $dao = new funcionarioDAO();

        
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }

    }

    public function getAllRows()
    {
        include 'DAO/funcionarioDAO.php'; 
        
       
        $dao = new funcionarioDAO();

        
        $this->rows = $dao->select();
    }


    
    public function getById(int $id)
    {
        include 'DAO/funcionarioDAO.php'; 

        $dao = new funcionarioDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new funcionarioModel(); 

        
    }


   
    public function delete(int $id)
    {
        include 'DAO/funcionarioDAO.php'; 

        $dao = new funcionarioDAO();

        $dao->delete($id);
    }
}