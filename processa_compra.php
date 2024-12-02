<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "compraspessoais";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['nome_Cli_Compra'];
$data = $_POST['data_Compra'];
$loja = $_POST['nome_Loja_Compra'];
<<<<<<< HEAD
$compra = $_POST['Compra_Identificador'];


$query = "INSERT INTO compra (nome_Cli_Compra, data_Compra, nome_Loja_Compra, Compra_Identificador) VALUES ('$nome', '$data', '$loja', '$compra')";
=======


mysqli_query($conexao, $query);

header('location:index.php');
?>
