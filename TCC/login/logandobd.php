<?php
include("conexao.php");

//VERIFICANDO SE CAMPO É NULO
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo 'Preencha seu e-mail';
    } else if (strlen($_POST['senha']) == 0){
        echo 'Preencha sua senha';
    }else {
//CRIANDO BUSCA NO BANCO
        $email = $con>real_escape_string($_POST['email']);
        $senha = $con->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email= '$email' AND senha = '$senha'";
        $sql_query = $con>query($sql_code) or die("Falha na execução do código SQL:" . $con->error);
//VERIFICANDO SE EXISTE VALOR NA TABELA
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario1 = $sql_query->fetch_array();
             
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario1['id'];
            $_SESSION['nome'] = $usuario1['nome'];
            $_SESSION['email'] = $usuario1['email'];
            $_SESSION['nivel'] = $usuario1['nivel_usuario'];

            echo "<script>alert('Seja bem-vindo!'); window.location.href='/coasperger/feed.php'</script>";

        }elseif($quantidade == 0){
            echo "<script>alert('Usuário não existe...'); window.location.href='/coasperger/login.html'</script>";
        }else{
            echo "<script>alert('Login e/ou Senha inválidos'); window.location.href='/coasperger/login.html'</script>";
    }
}

}