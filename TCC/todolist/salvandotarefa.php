<?php
session_start();
include_once("../conexao/bradok.php");

$tarefa = filter_input (INPUT_POST, 'tarefa', FILTER_SANITIZE_STRING);
$id_usuario = 	$_SESSION['id'];
echo $id_usuario;
$concluido = 0;

$ru = "INSERT INTO todolist (tarefa, concluida, id) VALUES ('$tarefa', '$concluido', '$id_usuario')";
echo $ru;
$resultado_usuario = mysqli_query($conn, $ru);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<script>alert('Sua anotação soi salva')</script>";  
    header("Location: to do list.php");
}else{
    header("Location: to do list.php");
}

?>