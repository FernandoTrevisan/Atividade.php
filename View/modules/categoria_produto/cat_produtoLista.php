<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>

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
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            
            <td>
                <a href="/cat_produto/delete?id=<?= $item->id ?>">x</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                
                <a href="/cat_produto/cadastro?id=<?= $item->id ?>"><?= $item->Descricao ?></a>
            </td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="3">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>

</body>
</html>