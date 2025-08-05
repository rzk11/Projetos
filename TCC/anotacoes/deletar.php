<?php
    include_once "bradok.php";
    
    
    $usua=$_GET['id'] ;
    $query = "DELETE FROM `anotacoes` WHERE `id_anotacao` = $usua";
    $resultado = mysqli_query($conn, $query);
    header( "Location: anotações.php");
  
?>