function setDadosModalExcluir(cod){
    document.getElementById("excluirCod").value = cod;
}

function setDadosModalEditar(cod,email, endereco, telefone, foto, login, senha){
    document.getElementById("editarCod").value = cod;
    document.getElementById("editarEmail").value = email;
    document.getElementById("editarEndereco").value = endereco;
    document.getElementById("editarTelefone").value = telefone;
    document.getElementById("editarLogin").value = login;
    document.getElementById("editarSenha").value = senha;
    document.getElementById("editarFoto").value = foto;
}
function setDadosModalExcluir2(cod){
    document.getElementById("excluirCod2").value = cod;
}