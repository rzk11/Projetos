<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "study_notes";
$port = "3308";
 
try{
    
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

}  catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}