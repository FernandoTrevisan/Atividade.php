<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>

label, input { display: block;}


input {
    border: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: #f2f2f2;
    padding: 12px;
    border: 1px solid black;
    border-radius: 3px;
    width: 250px;
    outline: none;
}

button{
    margin-top: 25px;
        
    cursor: pointer;
        
    
    border: 1px solid black;

        width: 87px ;
        height: 55px;


}

    </style>
</head>
<body>


    <form method="post" action="/cat_produto/save">
    

    <center>
     <legend>Cadastro de Categoria Produto</legend>
        
        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <label for="descricao">DESCRIÇÃO:</label>
        <input name="descricao" type="text" value="<?= $model->descricao ?>" />

        <button type="submit">ENVIAR</button>
    </center>


    </form>
</body>
</html>