<?php
require_once 'arquivoSimples.php';

$acao = $_REQUEST['acao'];

switch($acao){
	case 'login':
		$usuario = $_POST['user'];
        $senha = $_POST['passuser'];
        if(autenticacao($usuario,$senha)){
              $_SESSION['sisvisita']['user'] = $usuario;
                header('location: controlpanel.php');
        }else{
            $_SESSION['sisvisita']['mensagem'] = "Usuario inválido. tente novamente";
            echo "Usuario inválido. tente novamente";
        }
	break;
	case 'logoff':
		unset($_SESSION['sisvisita']['user']);
		header('location: index.html');
	break;
	default:
		$_SESSION['sisvisita']['mensagem'] = "Não sei o que você tentou... mas não deu certo!!!!";
		header('location: login.php');
	break;
}

?>
