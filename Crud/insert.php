<?php

include_once '../Poo/Clientes.php'; 

$cliente = new Clientes();
$cliente->post($_POST);
$cliente->insert();

