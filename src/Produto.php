<?php

declare(strict_types=1);

class Produto
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo', 'php', '123456');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list()
    {
        $sql = "SELECT * FROM produtos";

        echo "<h3>Produtos: </h3>";

        foreach ($this->conexao->query($sql) as $key => $value) {
            echo "ID: {$value['id']} <br>Descrição: {$value['descricao']} <hr>";
        }
    }

    public function insert()
    {
        return true;
    }

    public function update()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }
}