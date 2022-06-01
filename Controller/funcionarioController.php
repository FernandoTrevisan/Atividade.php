<?php


class funcionarioController 
{
    
    public static function index() 
    {
        include 'Model/funcionarioModel.php';
        
        $model = new funcionarioModel(); 
        $model->getAllRows();
       
       
       
        include 'View/modules/funcionario/listafuncionario.php';

    }



   
    public static function form()
    {
        
        include 'Model/funcionarioModel.php'; 
        $model = new funcionarioModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
        
        
        
        
        include 'View/modules/funcionario/Formfuncionario.php';
    }

    
    public static function save() {

        include 'Model/funcionarioModel.php'; 

        
        $model = new funcionarioModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cargo = $_POST['cargo'];
       
        $model->save();  

    
        header("Location: /funcionario"); 

  
    }

    public static function delete()
    {
        include 'Model/funcionarioModel.php'; 

        $model = new funcionarioModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /funcionario"); 
    }

}