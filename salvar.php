<?php
require_once 'arquivoSimples.php';
if ($_POST){
    
   if(!empty($_POST['fname'])){
         $fname = filter_input(INPUT_POST, 'fname');
    }
    else{
            $conseguiu = false;
            $mensagem = "Verifique o campo Nome..";
            include './contato.php';
            die();
            
    }
    if(!empty($_POST['lname'])){
            $lname = filter_input(INPUT_POST, 'lname');
    }
    else{
            $conseguiu = false;
            $mensagem = "Verifique o campo Sobrenome..";
            include './contato.php';
            die();
    }
    
     if(!empty($_POST['email'])){
            $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
     }
    else{
            $conseguiu = false;
            $mensagem = "Verifique o campo Email..";
            include './contato.php';
            die();
    }
    
     if(!empty($_POST['tel'])){
            $tel = filter_input(INPUT_POST, 'tel');
     }
    else{
            $conseguiu = false;
            $mensagem = "Verifique o campo Telefone..";
            include './contato.php';
            die();
    }
    
     if(!empty($_POST['mensagem'])){
            $mensagem = filter_input(INPUT_POST, 'mensagem',FILTER_SANITIZE_ENCODED);
    }
    else{
            $conseguiu = false;
            $mensagem = "Verifique o campo Mensagem..";
            include './contato.php';
            die();
            
    }
    
    $conseguiu = salvarContato($fname,$lname,$email,$tel,$mensagem);
 
    if ($conseguiu == true){
        $mensagem = "Sua mensagem foi inserida em nosso banco de dados.";
        include './contato.php';
    }
} 
else {
    die("Não autorizado");
}
