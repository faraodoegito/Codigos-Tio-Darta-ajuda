<?php
session_start();


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "primeira base";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>