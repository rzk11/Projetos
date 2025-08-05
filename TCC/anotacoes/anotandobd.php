<?php
session_start();
include_once("bradok.php");

$titulo_A = filter_input (INPUT_POST, 'titulo_A', FILTER_SANITIZE_STRING);
$conteudoA = filter_input (INPUT_POST, 'conteudoA', FILTER_SANITIZE_STRING);
$user=$_SESSION['id'] ;


$ru = "INSERT INTO anotacoes (titulo_A, conteudoA, id) VALUES ('$titulo_A', '$conteudoA', '$user')";
$resultado_usuario = mysqli_query($conn, $ru);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<script>alert('Sua anotação foi salva!')</script>";  
    header("Location:anotações.php");
}else{
    header("Location: cadastro.html");
}
 

