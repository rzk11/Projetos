<?php
session_start();
include_once("bradok.php");

$dia = filter_input (INPUT_POST, 'dia', FILTER_SANITIZE_STRING);



$ru = "INSERT INTO grade (domingo) VALUES ('$domingo')";
$resultado_usuario = mysqli_query($conn, $ru);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<script>alert('Seu cadastro foi feito com sucesso')</script>";  
    header("Location: /TCC/home/home.php");
}else{
    header("Location: cadastro.html");
}
 