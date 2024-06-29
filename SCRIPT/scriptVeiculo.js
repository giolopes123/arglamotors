function setDadosModalExcluir(cod){
    document.getElementById("excluirCod").value = cod;
}

function setDadosModalEditar(cod, ano_de_fabricacao, cor, descricao, marca, modelo, n_chassi, n_placa, preco, quilometragem, foto){
    document.getElementById("editarCod").value = cod;
    document.getElementById("editarAno_de_fabricacao").value = ano_de_fabricacao;
    document.getElementById("editarCor").value = cor;
    document.getElementById("editarDescricao").value = descricao;
    document.getElementById("editarMarca").value = marca;
    document.getElementById("editarModelo").value = modelo;
    document.getElementById("editarN_chassi").value = n_chassi;
    document.getElementById("editarN_placa").value = n_placa;
    document.getElementById("editarPreco").value = preco;
    document.getElementById("editarQuilometragem").value = quilometragem;
    document.getElementById("editarFoto").src = "UPLOADS/VEICULOS/"+ foto;
}

function abrirDetalhes(n_placa, n_chassi, quilometragem, ano_de_fabricacao, descricao, cor){
    document.getElementById("verN_placa").value = n_placa;
    document.getElementById("verN_chassi").value = n_chassi;
    document.getElementById("verQuilometragem").value = quilometragem;
    document.getElementById("verAno_de_fabricacao").value = ano_de_fabricacao;
    document.getElementById("verDescricao").value = descricao;
    document.getElementById("verCor").value = cor;
}


function adicionarProduto(cod){
    var dados = JSON.stringify(cod);
    $.ajax({
        url: 'carrinho.php',
        type: 'POST',
        data: {data: dados},

        success: function(result){
            
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Retorno caso algum erro ocorra
        }

    });


}


function removeProduto(cod) {
    var codProduto = JSON.stringify(cod);

    $.ajax({
        url: 'carrinho.php', 
        method: 'POST',
        data: { cod: codProduto }, 
        success: function(response) {
       
            window.location.reload(); 
        },
        error: function(xhr, status, error) {
      
            console.error(error);
         
        }
    });
}


