<?php

class produtoController 
{
    
    

  
    public static function form()
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/produto/produtocadastro.php';
    }
    
    public static function lista()
    {
        include 'Model/ProdutoModel.php'; 
        
        $model = new ProdutoModel(); 
        $model->getAllRows();
        
        
        
        
        
        include 'view/modules/produto/ProdutoLista.php';
    }


    
    public static function save() 
    {


        include 'Model/produtoModel.php'; 
    
        
        $produto = new produtoModel();
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->data_entrega = $_POST['data_entrega'];
        $produto->validade = $_POST['validade'];
        $produto->saida = $_POST['saida'];
        $produto->codigo_barras = $_POST['codigo_barras'];
        

        $produto->save();  

        header("Location: /produto"); 

        
    }

    
    public static function delete()
    {
        include 'Model/ProdutoModel.php'; 

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /produto"); 
    }
}