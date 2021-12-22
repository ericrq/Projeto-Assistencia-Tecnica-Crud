<?php

class Produto
{
    private $id_produto, $tipo_produto;

    public function getId_produto()
    {
        return $this->id_produto;
    }

    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }

    public function getTipo_produto()
    {
        return $this->tipo_produto;
    }

    public function setTipo_produto($tipo_produto)
    {
        $this->tipo_produto = $tipo_produto;
    }
}
