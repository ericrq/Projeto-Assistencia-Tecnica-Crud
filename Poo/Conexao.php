<?php

class Conexao
{
    public static function getConn()
    {
        //conexao com o banco mysql
        $connection = mysqli_connect('localhost', 'root', '', 'crud_poo');

        return $connection;
    }
}
