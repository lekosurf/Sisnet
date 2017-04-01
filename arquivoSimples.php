<?php
session_start();

function criarContato($fname,$lname,$email,$tel,$mensagem){
    return array(
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'tel' => $tel,
        'mensagem' => $mensagem,
    );
}

function salvarContato($fname,$lname,$email,$tel,$mensagem){
    $dadosConexao = "host='localhost' port='5432' dbname='cadastro_seaweb' user='postgres' password='123456'";
    $conexao = pg_connect($dadosConexao);
       if(!$conexao){
           return false;
       }
    $novoContato = "insert into cadastro_clientes (p_nome,u_nome,email,tel,mensagem) VALUES ('$fname','$lname','$email','$tel','$mensagem');";
    $query = pg_query($conexao,$novoContato);
    return true;
    $mensagem = "seu contato foi cadastrado em nosso banco de dados";
    include 'contato.php';
}

function lerProdutos(){
    $dadosConexao = "host='localhost' port='5432' dbname='cadastro_seaweb' user='postgres' password='123456'";
    $conexao = pg_connect($dadosConexao);
       if(!$conexao){
           return false;
       }
    $consultaProduto = "select * from cadastro_produtos";
    $query = pg_query($conexao, $consultaProduto);
    $rows = pg_num_rows($query);
}

function autenticacao($usuario,$senha){
    $dadosConexao = "host='ec2-54-227-237-223.compute-1.amazonaws.com' port='5432' dbname='d5084fthqu9j47' user='rducjkhngkddkx' password='6f6c8f63d7da780f55e32261f3e5e3471f080fd57843dd140d21899817f06ca5'";
    $conexao = pg_connect($dadosConexao);
    $consulta =  "SELECT * FROM cadastro_usuario";
    $query = pg_query($conexao,$consulta);
    while($row = pg_fetch_assoc($query)){
        if($row['usuario'] == $usuario && $row['senha'] == $senha){
            return true;
        }
        
    }
}

function estaAutenticado(){
	return isset($_SESSION['sisvisita']['user']);
}

function cadastroPrdutos(){
    
    $_POST['nproduto'];
    var_dump($_POST);
    die;
}

?>
