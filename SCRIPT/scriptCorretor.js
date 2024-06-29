function setDadosModalExcluir(cod){
    document.getElementById("excluirCod").value = cod;
}

function setDadosModalEditar(cod, email, endereco, telefone, senha, nome_corretor, n_matricula, dt_admissao, cpf_corretor, rg, foto){
    document.getElementById("editarCod").value = cod;
    document.getElementById("editarEmail").value = email;
    document.getElementById("editarEndereco").value = endereco;
    document.getElementById("editarTelefone").value = telefone;
    document.getElementById("editarSenha").value = senha;
    document.getElementById("editarNome_corretor").value = nome_corretor;
    document.getElementById("editarN_matricula").value = n_matricula;
    document.getElementById("editarDt_admissao").value = dt_admissao;
    document.getElementById("editarCpf_corretor").value = cpf_corretor;
    document.getElementById("editarRg").value = rg;
    document.getElementById("editarFoto").src = "UPLOADS/CORRETORES/"+foto;
}

function abrirDetalhes(dt_admissao, n_matricula, endereco, senha, rg, cpf_corretor){
    document.getElementById("verDt_admissao").value = dt_admissao;
    document.getElementById("verN_matricula").value = n_matricula;
    document.getElementById("verEndereco").value = endereco;
    document.getElementById("verSenha").value = senha;
    document.getElementById("verRg").value = rg;
    document.getElementById("verCpf_corretor").value = cpf_corretor;
}