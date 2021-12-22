<?php

include_once 'Produto.php';

class ProdutoDao
{
    public function read()
    {
        //comando sql
        $sql = "SELECT * FROM produto";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        return mysqli_query($con, $sql);
    }
}
