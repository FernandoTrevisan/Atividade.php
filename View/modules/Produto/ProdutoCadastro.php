<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
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
    <form action="/produto/save" method="post">
        <center>
            <legend>Cadastro de Produto</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">nome do produto:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

            <label for="data_entrega">data de emtrega do pruduto:</label>
            <input name="data_entrega" value="<?= $model->data_entrega ?>" id="data_entrega" type="date" />

            <label for="saida">saida do produto:</label>
            <input name="saida"  value="<?= $model->saida ?>" id="saida" type="date" />

            <label for="validade">validade do produto:</label>
            <input name="validade" value="<?= $model->validade ?>" id="validade" type="date" />

            <label for="codigo_barras">codigo de barras do produto:</label>
            <input name="codigo_barras"  value="<?= $model->codigo_barras ?>" id="codigo_barras" type="number" />

            
            <button type="submit">Enviar</button>

        </center>
    </form>    
</body>
</html>