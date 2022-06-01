<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista pessoa</title>

    <style>

    a[class="voltar"] {
        display: inline-block;
        margin-left: 10em;
    }

    table{
        margin-left: 1em;
        float: left;
        border:1px solid black;
        border-collapse: collapse;
        
    }



    

    th,td{

    border:1px solid black;
    padding:15px;
}
    </style>
</head>
<body>

 <a href="/pessoa/form" class="voltar">Voltar</a>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>rg</th>
            <th>cpf</th>
            <th>Data Nascimento</th>
            <th>email</th>
            <th>telefone</th>
            <th>endereco</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pessoa/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->rg ?></td>
            <td><?= $item->cpf ?></td>
            <td><?= $item->data_nascimento ?></td>
            <td><?= $item->email ?></td>
            <td><?= $item->telefone ?></td>
            <td><?= $item->endereco ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>