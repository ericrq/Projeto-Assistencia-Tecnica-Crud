<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link css geral -->
    <link rel="stylesheet" href="css/Style.css">

    <!-- icones fontawesome-->
    <script src="https://kit.fontawesome.com/19e27bbf66.js" crossorigin="anonymous"></script>

    <!-- favico -->
    <link rel="shortcut icon" href="../img/AtIcon.ico" type="image/x-icon">

    <title>Tabela Administrativa</title>
</head>

<body>
    <!-- section tabela -->
    <section class="table textos">
        <h1 class="titulos">Clientes</h1>
        <!-- tabela -->
        <table border="1">

            <!-- thread com campos fixos -->
            <thead>
                <tr>
                    <!-- campos fixos -->
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Defeito</th>
                    <th>Tipo Do Produto</th>
                    <!-- campo fixo para deleta e editar -->
                    <th colspan="2">Açoes</th>
                </tr>
            </thead>

            <?php

            //conexao com os arquivos do Poo
            require_once '../Poo/Clientes.php';
            require_once '../Poo/ClientesDao.php';
            require_once '../Poo/Conexao.php';
            require_once '../Poo/Produto.php';
            require_once '../Poo/ProdutoDao.php';

            //criaçao de um objeto do Dao do cliente
            $ClienteDao = new ClientesDao();

            //chamada do metado read com join de cliente Dao
            $resultado = $ClienteDao->read_join();

            //mostra os dados do banco na tabela
            while ($cliente = mysqli_fetch_array($resultado)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['endereco']; ?></td>
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['defeito']; ?></td>
                        <td><?php echo $cliente['tipo']; ?></td>

                        <!-- link com os arquivos auxiliares para executar a ediçao e delete -->
                        <td><a href="../Crud/editar.php?id_cliente=<?php echo $cliente['id_cliente'] ?>"><abbr title=" editar registro"><img src="../img/icones fontwesome/edit-solid.svg" alt="icone editar"></abbr></a></td>
                        <td><a href="../Crud/delete.php?id_cliente=<?php echo $cliente['id_cliente']; ?>"><abbr title="excluir registro"><img src="../img/icones fontwesome/trash-solid.svg" alt="icone deletar"></abbr></a></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </section>
    <!-- link para o formulario -->
    <!-- usei divi por n estar centralizando -->
    <div class="voltar_form_div">
        <a class="textos voltar_form" href="Index.php#Formulario">Adicionar Cliente</a>
    </div>


    <!-- ad -->
    <footer>
        <a target="_black" class="textos" href="https://github.com/ericrq">Desenvolvido Por Eric On<i class="fa fa-github"></i></a>
    </footer>
</body>

</html>