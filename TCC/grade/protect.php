<?php
  if(!isset($_SESSION)){
    session_start();
}
//VERIFICANDO SE USUARIO ESTÁ LOGADO PARA PODER ACESSAR A PAGINA
    if(!isset($_SESSION['id'])){
        die("<script>alert('Você não tem permissão para acessar essa página'); window.location.href='/TCC/naolog/naoestalogado.php'</script>");
    }
    
?>