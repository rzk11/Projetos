<?php

include_once("bradok.php");
$horario = filter_input (INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$domingo = filter_input (INPUT_POST, 'domingo', FILTER_SANITIZE_STRING);
$segunda = filter_input (INPUT_POST, 'segunda', FILTER_SANITIZE_STRING);
$terca = filter_input (INPUT_POST, 'terca', FILTER_SANITIZE_STRING);
$quarta = filter_input (INPUT_POST, 'quarta', FILTER_SANITIZE_STRING);
$quinta = filter_input (INPUT_POST, 'quinta', FILTER_SANITIZE_STRING);
$sexta = filter_input (INPUT_POST, 'sexta', FILTER_SANITIZE_STRING);
$sabado = filter_input (INPUT_POST, 'sabado', FILTER_SANITIZE_STRING);

$usuar=$_SESSION['id'] ;
$age = "INSERT INTO agenda ( horario, domingo, segunda, terca, quarta, quinta, sexta, sabado,id_usuario) 
VALUES ( '$horario', '$domingo', '$segunda', '$terca', '$quarta', '$quinta', '$sexta', '$sabado','$usuar' )";
$resultado_usuario = mysqli_query($conn, $age);


?>