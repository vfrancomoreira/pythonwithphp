<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bot_wpp';
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn){

    // echo"FALHA NA CONEXÃO DO BANCO DE DADOS!";
}
else{

    // echo "CONEXÃO EFETUADA COM SUCESSO!";
}

?>