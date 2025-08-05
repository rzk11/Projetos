//Inicio da prova, pegando a pergunta e a resposta correta
const quizData = [
    {
    question: "1) (Enem) Os países industriais adotaram uma concepção diferente das relações familiares e do lugar da fecundidade na vida familiar e social. A preocupação de garantir uma transmissão integral das vantagens econômicas e sociais adquiridas tem como resultado uma ação voluntária de limitação do número de nascimentos. Em meados do século XX, o fenômeno social descrito contribuiu para o processo europeu de:",
    a: "A) Estabilização da pirâmide etária.",
    b: "B) Conclusão da transição demográfica.",
    c: "C) Contenção da entrada de imigrantes.",
    d: "D) Elevação do crescimento vegetativo.",
    e: "E) Formação de espaços superpovoados.",
    correct: "b",
    },
    {
    question: "2) (Enem) O desgaste acelerado sempre existirá se o agricultor não tiver o devido cuidado de combater as causas, relacionadas a vários processos, tais como: empobrecimento químico e lixiviação provocados pelo esgotamento causado pelas colheitas e pela lavagem vertical de nutrientes da água que se infiltra no solo, bem como pela retirada de elementos nutritivos com as colheitas. Os nutrientes retirados, quando não repostos, são comumente substituídos por elementos tóxicos, como, por exemplo, o alumínio. A dinâmica ambiental exemplificada no texto gera a seguinte consequência para o solo agricultável:",
    a: "A) Elevação da acidez.",
    b: "B) Ampliação da salinidade.",
    c: "C) Formação de voçorocas.",
    d: "D) Remoção da camada superior.",
    e: "E) Intensificação do escoamento superficial",
    correct: "a",
    },
    {
    question: "3) (Enem) Um carro esportivo e financiado pelo Japão, projetado na Itália e montado em Indiana, México e França, usando os mais avançados componentes eletrônicos, que foram inventados em Nova Jérsei e fabricados na Coreia. A campanha publicitária é desenvolvida na Inglaterra, filmada no Canadá, a edição e as cópias, feitas em Nova York para serem veiculadas no mundo todo. Teias globais disfarçam-se com o uniforme nacional que lhes for mais conveniente. A viabilidade do processo de produção ilustrado pelo texto pressupõe o uso de:",
    a: "A) Linhas de montagem e formação de estoques.",
    b: "B) Empresas burocráticas e mão de obra barata.",
    c: "C) Controle estatal e infraestrutura consolidada.",
    d: "D) Organização em rede e tecnologia de informação.",
    e: "E) Gestão centralizada e protecionismo econômico.",
    correct: "d",
    },
    {
    question: "4) (Enem) O processo de concentração urbana no Brasil em determinados locais teve momentos de maior intensidade e, ao que tudo indica, atualmente passa por uma desaceleração no ritmo de crescimento populacional nos grandes centros urbanos. Uma causa para o processo socioespacial mencionado no texto é o(a):",
    a: "A) Carência de matérias-primas.",
    b: "B) Degradação da rede rodoviária.",
    c: "C) Aumento do crescimento vegetativo.",
    d: "D) Centralização do poder político.",
    e: "E) Realocação da atividade industrial.",
    correct: "e",
    },
    {
    question: "5) (Enem) Saudado por centenas de militantes de movimentos sociais de quarenta países, o papa Francisco encerrou no dia 09/07/2015 o 2º Encontro Mundial dos Movimentos Populares, em Santa Cruz de La Sierra, na Bolívia. Segundo ele, a “globalização da esperança, que nasce dos povos e cresce entre os pobres, deve substituir esta globalização da exclusão e da indiferença”. No texto há uma crítica ao seguinte aspecto do mundo globalizado:",
    a: "A) Liberdade política.",
    b: "B) Mobilidade humana.",
    c: "C) Conectividade cultural.",
    d: "D) Disparidade econômica.",
    e: "E) Complementaridade comercial.",
    correct: "d",
    },
    {
    question: "6) (Enem) Os moradores de Utqiagvik passaram dois meses quase totalmente na escuridão Os habitantes desta pequena cidade no Alasca — o estado dos Estados Unidos mais ao norte — já estão acostumados a longas noites sem ver a luz do dia. Em 18 de novembro de 2018, seus pouco mais de 4 mil habitantes viram o último pôr do sol do ano. A oportunidade seguinte para ver a luz do dia ocorreu no dia 23 de janeiro de 2019, às 13 h 04 min (horário local). O fenômeno descrito está relacionado ao fato de a cidade citada ter uma posição geográfica condicionada pela:",
    a: "A) Continentalidade.",
    b: "B) Maritimidade.",
    c: "C) Longitude.",
    d: "D) Latitude.",
    e: "E) Altitude.",
    correct: "d",
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
    <h3>1)B <br> 2)A <br> 3)D <br> 4)E <br> 5)D <br> 6)D</h3>
    <button onclick="history.go(0)">Tentar Novamente</button>
    ` 
    }
    }
    });