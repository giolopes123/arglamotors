function setDadosModalExcluir(cod){
    document.getElementById("excluirCod").value = cod;
}

function setDadosModalEditar(cod, nome_cliente, cpf_cliente, email, endereco, telefone, senha, rg, foto, estado_civil, nome_conjuge, cpf_conjuge){
    document.getElementById("editarCod").value = cod;
    document.getElementById("editarNome_cliente").value = nome_cliente;
    document.getElementById("editarCpf_cliente").value = cpf_cliente;
    document.getElementById("editarEmail").value = email;
    document.getElementById("editarEndereco").value = endereco;
    document.getElementById("editarTelefone").value = telefone;
    document.getElementById("editarSenha").value = senha;
    document.getElementById("editarRg").value = rg;
    document.getElementById("editarFotoPreview").src = "UPLOADS/CLIENTES/" + foto;
    document.getElementById("editarEstado_civil").value = estado_civil;
    document.getElementById("editarNome_conjuge").value = nome_conjuge;
    document.getElementById("editarCpf_conjuge").value = cpf_conjuge;
}

function abrirDetalhes(estado_civil, nome_conjuge, cpf_conjuge, endereco, senha, rg, cpf_cliente){
    document.getElementById("verEstado_civil").value = estado_civil;
    document.getElementById("verNome_conjuge").value = nome_conjuge;
    document.getElementById("verCpf_conjuge").value = cpf_conjuge;
    document.getElementById("verEndereco").value = endereco;
    document.getElementById("verSenha").value = senha;
    document.getElementById("verRg").value = rg; 
    document.getElementById("verCpf_cliente").value = cpf_cliente;
}

