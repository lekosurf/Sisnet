<?php require_once 'arquivoSimples.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sea Control Automação Comercial</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header class="guardaHeader">
            <?php
                if(estaAutenticado()){ ?>
                    <div class="guardalogoff">
                        <form method="POST" action="autenticacao.php">
                            <button name="acao" value="logoff">Sair</button>
                        </form>
                    </div>
            <?php
                }
            ?>
                <div class="guardaLogo">
                    <a href="index.html">
                        <img src="imagens/titulosea2.png" alt="Sea Control Logo" width="150" height="150">
                    </a>
                </div>
                    <nav class="menuLista">
                        <ul>
                            <Li><a href="index.html">Inicio</a></Li>
                            <Li><a href="home.html">Quem Somos</a></Li>
                            <Li><a href="produtos.php">Produtos</a></Li>
                            <Li><a href="contato.php">Contato</a></Li>
                        </ul>
                    </nav>
            </header>
            <div id="container">
                <header><h3>Iserir dados no banco SQL.</h3></header>
                <form action="controlpanel.php" method="POST">
                    <label>Descrição Produto:</label>
                        <input type="text" name="nproduto">
                    <label>Quantidade em estoque:</label>
                        <input type="number" name="qestoque">
                    <label>Preço Custo:</label>
                        <input type="number" name="vcusto">
                    <label>Imagem Produto:</label>
                        <input type="file" name="imagem">
                        <button value="enviar">Cadastrar</button>
                </form>
            </div>
    </body>
    
    <?php  
    
        $descricaoProduto = $_POST['nproduto'];
        $qtdeEstoque = $_POST['qestoque'];
        $precoCusto = $_POST['vcusto'];
        $imagenProduto = $_POST['imagem'];
    
    
    ?>
        
