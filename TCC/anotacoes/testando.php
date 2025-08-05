<?php
include_once "../conexao/conexao.php";
include_once "bradok.php";
$titulo_A = filter_input (INPUT_POST, 'titulo_A', FILTER_SANITIZE_STRING);
$conteudoA = filter_input (INPUT_POST, 'conteudoA', FILTER_SANITIZE_STRING);

$query_anotacoes = "SELECT id_anotacao, titulo_A, conteudoA FROM anotacoes";
$resultado = @mysqli_query($mysql->con, $query_anotacoes);      

$resultado = mysqli_query($conn, $query_anotacoes);
while ($dados = mysqli_fetch_array( $resultado )) {

    echo"<tr>";  
              echo"<td>$titulo_A</td>";
            echo"<td>$conteudoA</td>";
                    $idage=$dados['id_anotacao'];
         echo "<td> <a href='deletar.php?id=$idage'>Excluir</a></td>";
               echo "</tr>"; 
 
}

echo $dados; 