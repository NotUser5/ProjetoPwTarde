<?php 

$servidor = "201.55.32.20:6033";
$usuario = "pw_user";
$senha = "Fatec@123";
$bancoDados = "pw_user_db";

$conexao = mysqli_connect($servidor, $usuario, $senha) or die("Erro de conexão"); 
mysqli_select_db($conexao, $bancoDados);


?>