<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagem/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/insert.css">
    <title>InfoClick - Informações</title>
</head>

<body>
    <header class="cabecalho">
        <div><img class="logo" src="../imagem/logo.png" alt=""></div>
        <div class="caixa-pesquisa">
            <div class="barra-pesquisa">
                <input class="search-area" type="text" placeholder="Pesquisar...">
            </div>
            <img src="../imagem/lupa.png" alt="" class="lupa">
        </div>
        <div>
            <nav>
                <ul class="lista">
                    <li class="lista-opc"><a href="#">Kleiton Santos de Jesus</a></li>
                    <li class="lista-opc"><a href="#">Carrinho</a></li>
                    <li class="lista-opc"><a href="#">Favoritos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="caixa-menu">
        <nav class="menu">
            <ul class="lista lsmenu">
                <li class="lista-opc lsmenuopc"><a href="#">Computadores</a></li>
                <li class="lista-opc lsmenuopc"><a href="#">Celulares</a></li>
                <li class="lista-opc lsmenuopc"><a href="#">Notebooks</a></li>
                <li class="lista-opc lsmenuopc"><a href="#">Periféricos</a></li>
                <li class="lista-opc lsmenuopc"><a href="#">Hardware</a></li>
                <li class="lista-opc lsmenuopc"><a href="#">Redes</a></li>
            </ul>
        </nav>
    </div>
    <main class="corpo">
        <div class="card">
            <h2 class="titulo">Seus dados</h2>
            <div class="content">
                <?php
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                $email = $_GET["email"];
                $senha = $_GET["senha"];
                $telefone = $_GET["telefone"];
                $endereco = $_GET["endereco"];
                $cep = $_GET["cep"];
                $nascimento = $_GET["nascimento"];
                $processador = $_GET["processador"];
                $geracao = $_GET["generation"];
                $armazenamento = $_GET["armazenamento"];
                $placamae = $_GET["placa-video"];
                $monitor = $_GET["monitor"];
                $fps = $_GET["fps"];
                $add = $_GET["add"];
                echo "<p style=\"color: #fff; text-align: justify;\" >Olá $nome $sobrenome! Obrigado por escolher a nossa loja virtual de informática.
                Abaixo, os dados que você nos informou:</p> <br>";
                echo "<p style=\"color: #fff; text-align: justify;\">
                    Email: $email <br>
                    Senha: $senha <br>
                    Telefone: $telefone <br>
                    Endereco: $endereco <br>
                    Cep: $cep <br>
                    Data de nascimento: <br>
                    Processador: $processador <br>
                    Geração: $geracao <br>
                    Armazenamento: $armazenamento <br>
                    Placa mãe: $placamae <br>
                    Monitor: $monitor <br>
                    Taxa de atualização: $fps <br>
                    Algo a adicionar: $add <br></p>";


                ?>
            </div>
        </div>

    </main>
</body>

</html>