<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios</title>
    <link rel="stylesheet" href="css provas.css" />
    <link rel="icon" href="icon.jpeg">
  </head>
  <body>
    <div class="hero">
      <nav>
      <a href="/TCC/homelog/home logada.php"><img src="/TCC/imagens/Study2.png" class="logo" /></a>
        <ul>
        <li><a href="/TCC/homelog/home logada.php">Home</a></li>
          <li><a href="/TCC/grade/grade horaria.php">Grade Horária</a></li>
          <li><a href="/TCC/agenda/agenda.php">Agenda</a></li>
          <li><a href="/TCC/anotacoes/anotações.php">Minhas Anotações</a></li>
          <li><a href="/TCC/exercicios/exercícios.php">Exercícios</a></li>
          <li><a href="/TCC/todolist/to do list.php">To Do List</a></li>
        </ul>
        <a href="/TCC/perfil/perfil.php" class="btn">Meu Perfil</a>
      </nav>

      <div class="content">
        <span class="title">Exercícios</span>
        


        <div class="quiz-container" id="quiz">
            <div class="quiz-header">
            <h2 id="question">Pergunta</h2>
            <ul>
            <li>
            <input type="radio" name="answer" id="a" class="answer" />
            <label for="a" id="a_text">Resposta</label>
            </li>
            <li>
            <input type="radio" name="answer" id="b" class="answer" />
            <label for="b" id="b_text">Resposta</label>
            </li>
            <li>
            <input type="radio" name="answer" id="c" class="answer" />
            <label for="c" id="c_text">Resposta</label>
            </li>
            <li>
            <input type="radio" name="answer" id="d" class="answer" />
            <label for="d" id="d_text">Resposta</label>
            <li>
            <input type="radio" name="answer" id="e" class="answer" />
            <label for="e" id="e_text">Resposta</label>
            </li>
            </li>
            </ul>
            </div>
            <button id="submit">Próxima</button>
            </div>
            
            <script src="js prova historia.js"></script>
    </div>
  </body>
</html>