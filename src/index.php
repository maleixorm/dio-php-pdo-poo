<?php

require 'Produto.php';
$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo "<h3>Produtos: </h3>";
        foreach ($produto->list() as $key => $value) {
            echo "Id: {$value['id']} <br>Descrição: {$value['descricao']} <hr>";
        }
        break;
    
    case 'insert':
        
        break;
    
    case 'update':
        # code...
        break;
    
    case 'delete':
        # code...
        break;
    
    default:
        # code...
        break;
}