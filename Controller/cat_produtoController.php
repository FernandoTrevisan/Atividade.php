<?php

class cat_produtoController 
{

    public static function lista()
    {
        include "Model/cat_produtoModel.php";

        $model = new cat_produtoModel();
        $model-> getAllRows(); 
                               

        include "View/modules/categoria_produto/cat_produtoLista.php";
    }

    public static function cadastro()
    {
        include "Model/cat_produtoModel.php";
        $model = new cat_produtoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById((int) $_GET['id']); 
        include "View/modules/categoria_produto/cat_produtoCadastro.php";
    }

    
    public static function save()
    {
        include "Model/cat_produtoModel.php";

        $model = new cat_produtoModel();

        
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /cat_produto/lista");
    }

    public static function delete()
    {
        include "Model/cat_produtoModel.php";

        $model = new cat_produtoModel();
        $model->delete((int) $_GET['id']); 

        header("Location: /cat_produto/lista"); 
    }
}