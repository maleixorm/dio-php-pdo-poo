<?php

require 'Produto.php';
$produto = new Produto();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Listagem</title>
</head>
<body>
    <h1>Produtos:</h1>
    <?php foreach ($produto->list() as $value) { ?>
        <p>ID: <?= $value['id'] ?></p>
        <p>Descrição: <?= $value['descricao'] ?></p>
    <?php } ?>
    
</body>
</html>