<?php

include_once 'Conexao.php';
include_once 'Clientes.php';

class ClientesDao
{

    //funcao(metado) para insert - create do crud
    public function create(Clientes $clientes)
    {
        //comando sql
        $sql = "INSERT INTO cliente (nome, telefone, endereco, cpf, email, defeito, id_produto, dh_registro)
        values('" . $clientes->getnome() . "','" . $clientes->gettelefone() . "','" . $clientes->getendereco() . "','" . $clientes->getcpf() . "','" . $clientes->getemail() . "','" . $clientes->getDefeito() . "','" . $clientes->getid_produto() . "','" . $clientes->getDh_registro() . "')";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con = $connection->getConn();

        //roda o sql
        if (mysqli_query($con, $sql)) {
            //se n houver erro volta para a tabela
            header('location:../Main/Index.php?registrado#Formulario');
        }
    }

    //funcao(metado) para select - read do crud
    public function read()
    {
        //comando sql
        $sql = "SELECT * FROM cliente";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        return mysqli_query($con, $sql);
    }

    public function read_where($id_cliente)
    {
        //comando sql
        $sql = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        return mysqli_query($con, $sql);
    }

    //funcao(metado) para update - update do crud
    public function update(Clientes $clientes)
    {
        //comando sql 
        $sql = "UPDATE cliente SET nome = '" . $clientes->getnome() . "', telefone = '" . $clientes->gettelefone() . "', endereco = '" . $clientes->getendereco() . "', cpf = '" . $clientes->getcpf() . "', email = '" . $clientes->getemail() . "', defeito = '" . $clientes->getDefeito() . "', id_produto = '" . $clientes->getid_produto() . "', dh_registro = '" . $clientes->getDh_registro() . "' where id_cliente = '" . $clientes->getid_cliente() . "'";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        return mysqli_query($con, $sql);
    }

    public function delete($id_cliente)
    {
        //comando sql 
        $sql = "DELETE FROM cliente WHERE id_cliente = $id_cliente";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        //executa o comando sql
        if (mysqli_query($con, $sql)) {
        }
    }

    public function read_join()
    {
        $sql = "SELECT * FROM cliente
        JOIN produto ON cliente.id_produto = produto.id_produto";

        //cria objeto conexao
        $connection = new Conexao();
        //chama metado getconn
        $con =  $connection->getConn();

        return mysqli_query($con, $sql);
    }
}
