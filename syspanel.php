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
            <div class="controlPainel">
                <div class="guardaPanel">
                    <form action="autenticacao.php" method="POST">
                        <input type='hidden' name='acao' value='login'>
                        <h3 class="sysControl">System Control Panel</h3>
                        <label>Usuario:</label>
                            <input type="text" name="user" Maxlength=30>
                        <label>Senha:</label>
                            <input type="password" name="passuser" Maxlength=20>
                            <button type="submit" value="enviar">Logar</button>
                    </form>
                </div>
            </div>