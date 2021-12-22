<?php
include_once 'ClientesDao.php';

class Clientes
{
    //campos da tabela do bd
    private $id_cliente, $nome, $telefone, $endereco;
    private $cpf, $email, $defeito, $id_produto, $dh_registro;

    //gets e sets
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDefeito()
    {
        return $this->defeito;
    }

    public function setDefeito($defeito)
    {
        $this->defeito = $defeito;
    }

    public function getId_produto()
    {
        return $this->id_produto;
    }

    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }

    public function getDh_registro()
    {
        return $this->dh_registro;
    }

    public function setDh_registro($dh_registro)
    {
        $this->dh_registro = $dh_registro;
    }

    //metados expecificos
    public function insert()
    {
        $create = new ClientesDao();
        $create->create($this);
    }

    public function update()
    {
        $update = new ClientesDao();
        $update->update($this);
    }

    public function delete()
    {
        $delete = new ClientesDao();
        $delete->delete($this->id_cliente);
    }

    public function read_where()
    {
        $update = new ClientesDao();
        $update->read_where($this->id_cliente);
    }

    public function get($get)
    {
        $this->id_cliente = $get['id_cliente'];
    }

    public function post($post)
    {
        // pega tds os campos do formulario
        if (!isset($post['id_cliente'])) {
            $this->nome = $post['nome'];
            $this->telefone = $post['telefone'];
            $this->endereco = $post['endereco'];
            $this->cpf = $post['cpf'];
            $this->email = $post['email'];
            $this->defeito = $post['defeito'];
            $this->id_produto = $post['id_produto'];
            // pega a data e hora do momento do cadastro
            $this->dh_registro = date('Y-m-d,h:m:s');
        } else {
            $this->id_cliente = $post['id_cliente'];
            $this->nome = $post['nome'];
            $this->telefone = $post['telefone'];
            $this->endereco = $post['endereco'];
            $this->cpf = $post['cpf'];
            $this->email = $post['email'];
            $this->defeito = $post['defeito'];
            $this->id_produto = $post['id_produto'];
            // pega a data e hora do momento do cadastro
            $this->dh_registro = date('Y-m-d,h:m:s');
        }
    }
}
