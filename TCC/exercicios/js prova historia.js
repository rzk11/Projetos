//Inicio da prova, pegando a pergunta e a resposta correta
const quizData = [
{
question: "1) (Fuvest 2021) A economia do Império do Brasil foi caracterizada por:",
a: "A) Prevalecimento do trabalho assalariado imigrante e investimentos estatais na indústria primária.",
b: "B) Desenvolvimento de relações comerciais e diplomáticas com países americanos, em detrimento das relações com os países europeus.",
c: "C) Conjugação entre desenvolvimento agrícola e industrial, responsável por tornar o Brasil a 42a maior economia do mundo.",
d: "D) Crescimento progressivo da dívida externa e preponderância de uma economia agroexportadora.",
e: "E) Redução contínua do tráfico de escravos e políticas públicas voltadas à alfabetização e capacitação profissional de trabalhadores pobres.",
correct: "d",
},
{
question: "2) (Fuvest 2021) A ascensão de regimes autoritários na Europa nas primeiras décadas do século XX teve o amparo de milícias que arregimentaram uma legião de indivíduos de origem social heterogênea. Dentre estes grupos, destacam-se:",
a: "A) A Tropa de Proteção (SS), que foi uma organização paramilitar incumbida de organizar as manifestações de massa em apoio ao nazismo.",
b: "B) Os Camisas Negras, que usaram ações violentas, intimidação e assassinatos contra opositores políticos de Mussolini.",
c: "C) A Seção de Assalto (SA), que foi uma organização paramilitar responsável por assegurar os interesses nazistas nos territórios ocupados.",
d: "D) As Falanges espanholas, que foram empregadas na realização de atentados contra monarquistas e membros da comunidade judaica.",
e: "E) As milícias salazaristas, que atuaram para garantir a resistência contra os interesses portugueses na Ásia.",
correct: "b",
},
{
question: "3) (Fuvest 2013) A escravidão na Roma antiga:",
a: "A) Permaneceu praticamente inalterada ao longo dos séculos, mas foi abolida com a introdução do cristianismo.",
b: "B) Previa a possibilidade de alforria do escravo apenas no caso da morte de seu proprietário.",
c: "C) Era restrita ao meio rural e associada ao trabalho braçal, não ocorrendo em áreas urbanas, nem atingindo funções intelectuais ou administrativas.",
d: "D) Pressupunha que os escravos eram humanos e, por isso, era proibida toda forma de castigo físico.",
e: "E) Variou ao longo do tempo, mas era determinada por três critérios: nascimento, guerra e direito civil.",
correct: "e",
},
{
question: "4) (Fuvest 2012) A palavra “feudalismo” carrega consigo vários sentidos. Dentre eles, podem-se apontar aqueles ligados a:",
a: "A) Sociedades marcadas por dependências mútuas e assimétricas entre senhores e vassalos.",
b: "B) Relações de parentesco determinadas pelo local de nascimento, sobretudo quando urbano.",
c: "C) Regimes inteiramente dominados pela fé religiosa, seja ela cristã ou muçulmana.",
d: "D) Altas concentrações fundiárias e capitalistas.",
e: "E) Formas de economias de subsistência pré-agrícolas.",
correct: "a",
},
{
question: "5) (Fuvest 2020) As tentativas holandesas de conquista dos territórios portugueses na América tinham por objetivo central:",
a: "A) A apropriação do complexo açucareiro escravista do Atlântico Sul, então monopolizado pelos portugueses.",
b: "B) A formação de núcleos de povoamento para absorverem a crescente população protestante dos Países Baixos.",
c: "C) A exploração das minas de ouro recém descobertas no interior, somente acessíveis pelo controle de portos no Atlântico.",
d: "D) A ocupação de áreas até então pouco exploradas pelos portugueses, como o Maranhão e o Vale Amazônico.",
e: "E) A criação de uma base para a ocupação definitiva das áreas de mineração da América espanhola.",
correct: "a",
},
{
question: "6) (Fuvest 2014) As chamadas “revoluções inglesas”, transcorridas entre 1640 e 1688, tiveram como resultados imediatos",
a: "A) A proclamação dos Direitos do Homem e do Cidadão e o fim dos monopólios comerciais.",
b: "B) O surgimento da monarquia absoluta e as guerras contra a França napoleônica.",
c: "C) O reconhecimento do catolicismo como religião oficial e o fortalecimento da ingerência papal nas questões locais.",
d: "D) O fim do anglicanismo e o início das demarcações das terras comuns.",
e: "E) O fortalecimento do Parlamento e o aumento, no governo, da influência dos grupos ligados às atividades comerciais.",
correct: "e",
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
<h3>1)D <br> 2)B <br> 3)E <br> 4)A <br> 5)A <br> 6)E</h3>
<button onclick="history.go(0)">Tentar Novamente</button>
` 
}
}
});