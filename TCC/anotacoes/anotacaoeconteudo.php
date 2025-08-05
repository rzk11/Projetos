<?php
include_once "conexao2.php";

$query_anotacoes = "SELECT titulo_A, conteudoA FROM anotacoes";
$result_anotacoes = $conn->prepare($query_anotacoes);
$result_anotacoes->execute();

$dados = "";
while($row_anotacoes = $result_anotacoes->fetch(PDO::FETCH_ASSOC)){
    extract($row_anotacoes);
    $dados .= "<tr>
                    <td>$titulo_A</td>
                    <td>$conteudoA</td>
                </tr>"; 
 
}

echo $dados; 