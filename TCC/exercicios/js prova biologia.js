//Inicio da prova, pegando a pergunta e a resposta correta
const quizData = [
    {
    question: "1) (Enem) Corredores ecológicos visam mitigar os efeitos da fragmentação dos ecossistemas promovendo a ligação entre diferentes áreas, com o objetivo de proporcionar o deslocamento de animais, a dispersão de sementes e o aumento da cobertura vegetal. São instituídos com base em informações como estudos sobre o deslocamento de espécies, sua área de vida (área necessária para o suprimento de suas necessidades vitais e reprodutivas) e a distribuição de suas populações. Nessa estratégia, a recuperação da biodiversidade é efetiva porque:",
    a: "A) Propicia o fluxo gênico.",
    b: "B) Intensifica o manejo de espécies.",
    c: "C) Amplia o processo de ocupação humana.",
    d: "D) Aumenta o número de indivíduos nas populações.",
    e: "E) Favorece a formação de ilhas de proteção integral.",
    correct: "a",
    },
    {
    question: "2) (Enem) Insetos podem apresentar três tipos de desenvolvimento. Um deles, a holometabolia (desenvolvimento completo), é constituído pelas fases de ovo, larva, pupa e adulto sexualmente maduro, que ocupam diversos hábitats. Os insetos com holometabolia pertencem às ordens mais numerosas em termos de espécies conhecidas. Esse tipo de desenvolvimento está relacionado a um maior número de espécies em razão da",
    a: "A) Proteção na fase de pupa, favorecendo a sobrevivência de adultos férteis.",
    b: "B) Produção de muitos ovos, larvas e pupas, aumentando o número de adultos.",
    c: "C) Exploração de diferentes nichos, evitando a competição entre as fases da vida.",
    d: "D) Ingestão de alimentos em todas as fases de vida, garantindo o surgimentos do adulto.",
    e: "E) Utilização do mesmo alimento em todas as fases, otimizando a nutrição do organismo.",
    correct: "c",
    },
    {
    question: "3) (Enem) A polinização, que viabiliza o transporte do grão de pólen de uma planta até o estigma de outra, pode ser realizada biótica ou abioticamente. Nos processos abióticos, as plantas dependem de fatores como o vento e a água. A estratégia evolutiva que resulta em polinização mais eficiente quando esta depende do vento é o(a):",
    a: "A) Diminuição do cálice.",
    b: "B) Alongamento do ovário.",
    c: "C) Disponibilização do néctar.",
    d: "D) Intensificação da cor das pétalas.",
    e: "E) Aumento do número de estames.",
    correct: "e",
    },
    {
    question: "4) (Enem) O deserto é um bioma que se localiza em regiões de pouca umidade. A fauna é, predominantemente, composta por animais roedores, aves, répteis e artrópodes. Uma adaptação, associada a esse bioma, presente nos seres vivos dos grupos citados é o(a):",
    a: "A) Existência de numerosas glândulas sudoríparas na epiderme.",
    b: "B) Eliminação de excretas nitrogenadas de forma concentrada.",
    c: "C) Desenvolvimento do embrião no interior de ovo com casca.",
    d: "D) Capacidade de controlar a temperatura corporal.",
    e: "E) Respiração realizada por pulmões foliáceos.",
    correct: "b",
    },
    {
    question: "5) (Enem) A utilização de extratos de origem natural tem recebido a atenção de pesquisadores em todo o mundo, principalmente nos países em desenvolvimento que são altamente acometidos por doenças infecciosas e parasitárias. Um bom exemplo dessa utilização são os produtos de origem botânica que combatem insetos. O uso desses produtos pode auxiliar no controle da:",
    a: "A) Esquistossomose.",
    b: "B) Leptospirose.",
    c: "C) Leishmaniose.",
    d: "D) Hanseníase.",
    e: "E) Aids.",
    correct: "c",
    },
    {
    question: "6) (Enem) Para serem absorvidos pelas células do intestino humano, os lipídios ingeridos precisam ser primeiramente emulsificados. Nessa etapa da digestão, torna-se necessária a ação dos ácidos biliares, visto que os lipídios apresentam uma natureza apolar e são insolúveis em água. Esses ácidos atuam no processo de modo a:",
    a: "A) Hidrolisar os lipídios.",
    b: "B) Agir como detergentes. ",
    c: "C) Tornar os lipídios anfifílicos.",
    d: "D) Promover a secreção de lipases.",
    e: "E) Estimular o trânsito intestinal dos lipídios.",
    correct: "b",
    },
    
    //fim da prova em si

    ];

    
    //pegando as variáveis de acordo com o html
    const quiz = document.getElementById("quiz");
    const answerElements = document.querySelectorAll(".answer");
    const questionElement = document.getElementById("question");
    const a_text = document.getElementById("a_text");
    const b_text = document.getElementById("b_text");
    const c_text = document.getElementById("c_text");
    const d_text = document.getElementById("d_text");
    const e_text = document.getElementById("e_text");
    const submitButton = document.getElementById("submit");
    let currentQuiz = 0;
    let score = 0;
    const deselectAnswers = () => {
    answerElements.forEach((answer) => (answer.checked = false));
    };
    const getSelected = () => {
    let answer;
    answerElements.forEach((answerElement) => {
    if (answerElement.checked) answer = answerElement.id;
    });
    return answer;
    };
    const loadQuiz = () => {
    deselectAnswers();
    const currentQuizData = quizData[currentQuiz];
    questionElement.innerText = currentQuizData.question;
    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    d_text.innerText = currentQuizData.d;
    e_text.innerText = currentQuizData.e;
    };
    loadQuiz();


    //ação do botão, se o marcado for correto, marcar um acerto, se não,
    submitButton.addEventListener("click", () => {
    const answer = getSelected();
    if (answer) {
    if (answer === quizData[currentQuiz].correct) score++;
    currentQuiz++;
    if (currentQuiz < quizData.length) loadQuiz();
    else {


    //mudar o html, aparecer o gabarito e quantos acertos
    quiz.innerHTML = `
    <h2>Você acertou ${score}/${quizData.length} </h2>
    <h1>Gabarito:</h1>
    <h3>1)A <br> 2)C <br> 3)E <br> 4)B <br> 5)C <br> 6)B</h3>
    <button onclick="history.go(0)">Tentar Novamente</button>
    ` 
    }
    }
    });