<?php 
 //VERIFICANDO SE O USUÁRIO TEM PERMISSAO
 require "conexao/bradok.php";
 require "protect.php";
    if(!isset($_SESSION)){
        session_start();
    }
 $id = $_SESSION['id'];

 $sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE id = '$id'");

 while($row = $sql->fetch_array()){
    $nivel = $row['nivel_usuario'];

    if($nivel == 2){
        die("<script>alert('Você não tem permissão para acessar essa página'); window.location.href='/coasperger/pagina principal.html'</script>");
    }


 }
 