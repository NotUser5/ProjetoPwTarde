<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "pwtardenotu";

$conexao = mysqli_connect($servidor, $usuario, $senha) or die("Erro de conexão");

mysqli_select_db($conexao, $bancoDados);

?>