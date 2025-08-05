<?php

include('../conexao/bradok.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="csspesquisa.css" rel="stylesheet">
    <title>Sistema de Busca</title>
</head>
<body>
<center>
<nav>
        <ul>
          <li><a href="home adm.php">Home</a></li>
          <li><a href="index.php">Gerenciamento de Usuários</a></li>
          <li><a href="pesquisa.php">Pesquisa</a></li>
        </ul>
      </nav>
      <img src="/tcc/imagens/study2.png" class="logo">
    <h1>Usuários Study Notes</h1>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise" type="text">
        <button type="submit" class="btn">Pesquisar</button>
    </form>
    
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Nome</th>
            <th>ID</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="4"></td>
        </tr>
        <?php
        } else {
            $pesquisa = $conn ->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM usuarios 
                WHERE nome LIKE '%$pesquisa%' 
                OR id LIKE '%$pesquisa%'
                OR email LIKE '%$pesquisa%'
                OR senha LIKE '%$pesquisa%'";
            $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="4">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['id']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['senha']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#265c8c" fill-opacity="1" d="M0,96L12.6,96C25.3,96,51,96,76,80C101.1,64,126,32,152,32C176.8,32,202,64,227,112C252.6,160,278,224,303,245.3C328.4,267,354,245,379,218.7C404.2,192,429,160,455,170.7C480,181,505,235,531,261.3C555.8,288,581,288,606,282.7C631.6,277,657,267,682,229.3C707.4,192,733,128,758,90.7C783.2,53,808,43,834,42.7C858.9,43,884,53,909,80C934.7,107,960,149,985,144C1010.5,139,1036,85,1061,85.3C1086.3,85,1112,139,1137,181.3C1162.1,224,1187,256,1213,229.3C1237.9,203,1263,117,1288,112C1313.7,107,1339,181,1364,176C1389.5,171,1415,85,1427,42.7L1440,0L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path>
</svg>
    </center>
</body>
</html> 