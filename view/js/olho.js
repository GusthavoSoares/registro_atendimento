function pegaElemento(elemento) {
    return document.getElementById(`${elemento}`)
}

function mostraSenha(inputSenha) {
    return inputSenha.type === "password" ? inputSenha.type = "text" : inputSenha.type = "password"
}

const olho = pegaElemento("olho")
const senha = pegaElemento("senha")


olho.addEventListener("click", () => {
    mostraSenha(senha);
})