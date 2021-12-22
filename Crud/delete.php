<?php

include_once '../Poo/Clientes.php';

$cliente = new Clientes();
$cliente->get($_GET);
$cliente->delete();

header('location:../Main/TabelaAdm.php');
