<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5; url=index.php#Formulario">-->


    <!-- link css geral -->
    <link rel="stylesheet" href="css/Style.css">

    <!-- link css slider by w3school -->
    <link rel="stylesheet" href="css/SliderShow.css">

    <!-- favico -->
    <link rel="shortcut icon" href="../img/AtIcon.ico" type="image/x-icon">

    <!-- icones fontawesome-->
    <script src="https://kit.fontawesome.com/19e27bbf66.js" crossorigin="anonymous"></script>

    <title>Assistencia Tecnica</title>
</head>

<body>
    <!-- header -->
    <header>
        <h1 class="titulos">Assistencia Tecnica</h1>
        <p class="textos">Seja Bem-Vindo</p>
        <!-- menu -->
        <nav>
            <ul>
                <li><a href="#Serviços" class="textos hover">Serviços</a></li>
                <li><a href="#Formulario" class="textos hover">Registra-se</a></li>
            </ul>
        </nav>
    </header>

    <!-- slider by w3school -->
    <section class="slideshow-container">
        <div class="mySlides fade">
            <img src="../img/Banners/Hardware.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Sistemas.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Video Game.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Celulares.png" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <!-- serviços (id="servicos = ancora")-->
    <h1 class="servicos titulos" id="Serviços">Serviços</h1>

    <!-- cards -->
    <section class="row">
        <div class="card green">
            <h2 class="titulos">Hardware</h2>
            <p>
            <ul>
                <li class="textos">Solda do Chip</li>
                <li class="textos">Reparo de Componestes</li>
                <li class="textos">Reparo em Terminais dos Processadores</li>
            </ul>
            </p>
        </div>

        <div class="card blue">
            <h2 class="titulos">Sistema</h2>
            <p>
            <ul>
                <li class="textos">Instalaçao de Sistemas Operacionais</li>
                <li class="textos">Recuperaçao e Backup de Arquivos</li>
                <li class="textos">Gravaçao de Bios</li>
            </ul>
            </p>
        </div>

        <div class="card red">
            <h2 class="titulos">Video Game</h2>
            <p>
            <ul>
                <li class="textos">Reparo em Playstation 3, 4 e 5</li>
                <li class="textos">Reparo em Xbox 360, One, X</li>
                <li class="textos">Repara em Nintendo Switch</li>
            </ul>
            </p>
        </div>

        <div class="card cian">
            <h2 class="titulos">Celulares</h2>
            <p>
            <ul>
                <li class="textos">Troca de Tela</li>
                <li class="textos">Reparo de Componestes</li>
                <li class="textos">Atualizaçao de Softwares</li>
            </ul>
            </p>
        </div>
    </section>

    <!-- formulario  (id="formulario = ancora")-->
    <section class="form">
        <h1 class="titulos" id="Formulario">Formulario</h1>
        <p class="textos">Considere fazer um simples e rapido registro para obter um possivel reparo em seu equipamento.
        </p>

        <form action="../Crud/insert.php" method="post">
            <label for="nome" class="textos">Nome</label>
            <input class="textos" type="text" name="nome" id="nome" placeholder="Digite Seu Nome" required><br>

            <label for="telefone" class="textos">Telefone</label>
            <input class="textos" type="tel" name="telefone" id="telefone" placeholder="Digite Seu Telefone" required><br>

            <label for="endereço" class="textos">Endereço</label>
            <input class="textos" type="text" name="endereco" id="endereco" placeholder="Digite Seu Endereço" required><br>

            <label for="cpf" class="textos">CPF</label>
            <input class="textos" type="text" name="cpf" id="cpf" placeholder="Digite Seu Cpf" required><br>

            <label for="email" class="textos">Email</label>
            <input class="textos" type="email" name="email" id="email" placeholder="Digite Seu Email" required><br>

            <label for="defeito" class="textos">Defeito</label>
            <textarea class="textos" name="defeito" id="defeito" cols="30" rows="10" placeholder="Descreva o Defeito Do Equipamento" required></textarea><br>

            <!-- tipo produto, dinamico com POO e SQL -->
            <label class="textos" for="defeito">Tipo Do Produto</label>
            <select class="textos" required name="id_produto">
                <option value>Selecione um Tipo</option>
                <?php
                //conexao com os arquivos do Poo
                require_once '../Poo/Conexao.php';
                require_once '../Poo/Produto.php';
                require_once '../Poo/ProdutoDao.php';

                //criaçao de um objeto do Dao do protudo
                $ProdutoDao = new ProdutoDao();

                //chamada do metado read de produto Dao
                $resultado = $ProdutoDao->read();

                //mostra as opçoes do tipo do produto do banco para as opçoes do select
                while ($Produto = mysqli_fetch_array($resultado)) {
                ?>
                    <!-- option com value de id produto e campo do tipo produto -->
                    <option required value="<?php echo $Produto['id_produto']; ?>"><?php echo $Produto['tipo']; ?> </option>
                <?php
                }
                ?>
            </select>
            <!-- btn cadastrar -->
            <input class="textos" type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
        <?php
        if (isset($_GET['registrado'])) {
            echo '<div class="alert textos">Dados enviado com Sucesso!</div>';
        }
        ?>

        <!-- ver tabela de registro -->
        <a class="textos hover" href="TabelaAdm.php">Lista de Clientes</a>
    </section>

    <!-- ad -->
    <footer>
        <a target="_black" href="https://github.com/ericrq" class="textos">Desenvolvido Por Éric <i class="fa fa-github"></i></a>
    </footer>

    <!-- link js slider by w3school -->
    <script src="js/SliderShow.js"></script>
</body>

</html>