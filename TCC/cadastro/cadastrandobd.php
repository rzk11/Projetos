<?php
session_start();
include_once("bradok.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$ru = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $ru);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<script>alert('Seu cadastro foi feito com sucesso')</script>";  
    header("Location: /TCC/home/home.php");
}else{
    header("Location: cadastro.html");
}
 