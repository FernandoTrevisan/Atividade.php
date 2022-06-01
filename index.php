<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include "Controller/cat_produtoController.php";

include 'Controller/PessoaController.php';

include 'Controller/produtoController.php';

include 'Controller/funcionarioController.php';

switch($uri_parse)
{
    case '/home':
        include 'home.php';
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;


    
     case '/produto':
        produtoController::lista();

    break;

    case '/produto/form':
        produtoController::form();
    break;

    case '/produto/save':
        produtoController::save();
    break;

    case '/produto/delete':
        produtoController::delete();
    break;

    case "/cat_produto/lista":
        cat_produtoController::lista();
        break;

    case "/cat_produto/cadastro":
        cat_produtoController::cadastro();
        break;

    case "/cat_produto/save":
        cat_produtoController::save();
        break;

    case "/cat_produto/delete":
        cat_produtoController::delete();
        break;








    case '/funcionario':
        funcionarioController::index();
    break;

    case '/funcionario/form':
        funcionarioController::form();
    break;

    case '/funcionario/save':
        funcionarioController::save();
    break;

    case '/funcionario/delete':
        funcionarioController::delete();
    break;

    default:
        header("Location: /home");
    break;

    
    
    
    
}