const tbody = document.querySelector("tbody");
const cadForm = document.getElementById("cad-anotacao-from");

const listarAnotacoes = async () => {
    const dados = await fetch("./anotacaoeconteudo.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
} 

listarAnotacoes();

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    console.log("Adiconar");
});