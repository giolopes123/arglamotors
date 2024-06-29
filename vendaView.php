<?php  
require_once("CONTROLLER/vendaController.php");
require_once("nav.php");
?>

<title>CORRETORES | ArglaMotors</title>

<div class="container-xl">
	<?php
		include("MSG/msgs.php");	
	?>
    <div>
        <div>
            <div>
                <div class="row">
                    <div class="col-6">
                        <h2>Gerenciar <b>Vendas</b></h2>
                    </div>
                </div>

                <div class="row">
                    <form method="GET" class="col-12 mb-2">
                        <div class="input-group">
                            <input class="form-control py-2" type="search" name="pesquisa" placeholder="Pesquisar vendas" value="" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" name="acao" value="Pesquisar">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>

	<div class="row">
        <div class="col-12">
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th class="col-3" style="text-align: center;">Nome</th>
						<th class="col-4" style="text-align: center;">Email</th>
						<th class="col-2" style="text-align: center;">Telefone</th>
						<th style="text-align: center;">Ações</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($vendaes as $venda){ 
					?>
					<tr>
						<td style="text-align: center;"><?=$venda['nome_venda']?></td>
						<td style="text-align: center;"><?=$venda['email']?></td>
						<td style="text-align: center;"><?=$venda['telefone']?></td>
						<td style="text-align: center;">
							<a href="#editVendaModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar" onclick="setDadosModalEditar('<?=$venda['cod']?>','<?=$venda['email']?>','<?=$venda['endereco']?>','<?=$venda['telefone']?>','<?=$venda['senha']?>','<?=$venda['nome_venda']?>','<?=$venda['n_matricula']?>','<?=$venda['dt_admissao']?>','<?=$venda['cpf_venda']?>','<?=$venda['rg']?>','<?=$venda['foto']?>')">&#xE254;</i></a>
							<a href="#deleteVendaModal" class="Excluir" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir" onclick="setDadosModalExcluir(<?=$venda['cod']?>)">&#xE872;</i></a>
							<a href="#detalhesVendaModal" data-toggle="modal" onclick="abrirDetalhes('<?=$venda['dt_admissao']?>','<?=$venda['n_matricula']?>','<?=$venda['endereco']?>','<?=$venda['senha']?>','<?=$venda['rg']?>','<?=$venda['cpf_venda']?>')"><i class="material-icons">format_list_bulleted</i></a>
						</td>
					<?php } ?>	
						
					</tr> 
                    
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Adicionar Modal HTML -->
<div id="addVendaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar Venda</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required name="nome_venda">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required name="email">
					</div>
					<div class="form-group">
						<label>Endereco</label>
						<textarea class="form-control" required name="endereco"></textarea>
					</div>
					<div class="form-group">
						<label>CPF</label>
						<input type="text" class="form-control" required name="cpf_venda" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off" id="cpf_venda">
					</div>					
					<div class="form-group">
						<label>RG</label>
						<input type="text" class="form-control" required name="rg">
					</div>	
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" maxlength="15" onkeyup="handlePhone(event)" placeholder="(xx) 9.xxxx-xxxx" autocomplete="off" class="form-control" required name="telefone">
					</div>		
					<div class="form-group">
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="addFoto" name="foto">
							    <label class="custom-file-label" for="addFoto">Escolha uma foto</label>
							</div>
						</div>	
					</div>				
					<div class="form-group">
						<label>Data de Admissão</label>
						<input type="date" class="form-control" required name="dt_admissao">
					</div>				
					<div class="form-group">
						<label>Número da Matrícula</label>
						<input type="text" class="form-control" required name="n_matricula">
					</div>			
					<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control" required name="senha">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Adicionar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editVendaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data"> 
				<div class="modal-header">						
					<h4 class="modal-title">Editar dados do venda</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group d-flex justify-content-center">
						<img id="editarFoto" src="UPLOADS/CORRETORES/<?=$venda['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">		
					</div>				
					<input type="hidden" class="form-control" required id="editarCod" name="cod">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required id="editarEmail" name="email">
					</div>
					<div class="form-group">
						<label>Endereco</label>
						<textarea class="form-control" required id="editarEndereco" name="endereco"></textarea>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" maxlength="15" onkeyup="handlePhone(event)" placeholder="(xx) 9.xxxx-xxxx" autocomplete="off" class="form-control" required id="editarTelefone" name="telefone">
					</div>			
					<div class="form-group">
						<label>Senha</label>
						<input type="text" class="form-control" required id="editarSenha" name="senha">
					</div> 
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required id="editarNome_venda" name="nome_venda">
					</div> 
					<div class="form-group">
						<label>Número da Marícula</label>
						<input type="number" class="form-control" required id="editarN_matricula" name="n_matricula">
					</div>
					<div class="form-group">
						<label>Data de Admissão</label>
						<input type="date" class="form-control" required id="editarDt_admissao" name="dt_admissao">
					</div>	
					<div class="form-group">
						<label>CPF</label>
						<input type="text" class="form-control" required id="editarCpf_venda" name="cpf_venda" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off">
					</div>				
					<div class="form-group">
						<label>RG</label>
						<input type="text" class="form-control" required id="editarRg" name="rg">
					</div>
					<div class="form-group">	
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="editarFoto" name="foto">
							    <label class="custom-file-label" for="editarFoto">Escolha uma foto</label>
							</div>
						</div>
						<?php  ?>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-info" value="Editar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Detalhes Modal HTML -->
<div id="detalhesVendaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST"> 
				<div class="modal-header">						
					<h4 class="modal-title">Mais dados do venda</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<input type="hidden" class="form-control" id="verCod" name="cod">
					<div class="form-group">
						<label>RG</label>
						<input type="number" class="form-control" id="verRg" name="rg" disabled>
					</div>	
					<div class="form-group">
						<label>CPF</label>
						<input type="text" class="form-control" id="verCpf_venda" name="cpf_venda" disabled>
					</div>	
					<div class="form-group">
						<label>Endereco</label>
						<textarea class="form-control" id="verEndereco" name="endereco" disabled></textarea>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="text" class="form-control" id="verSenha" name="senha" disabled>
					</div>  
					<div class="form-group">
						<label>Número da Marícula</label>
						<input type="number" class="form-control" id="verN_matricula" name="n_matricula" disabled>
					</div>
					<div class="form-group">
						<label>Data de Admissão</label>
						<input type="date" class="form-control" id="verDt_admissao" name="dt_admissao" disabled>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-info" data-dismiss="modal" value="Fechar">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteVendaModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Excluir Venda</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">		
					<input type="hidden" name="cod" id="excluirCod">
					<p>Tem certeza de que deseja excluir estes registros?</p>
					<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Excluir" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
  const inputVenda = document.querySelector("#cpf_venda");
  const inputVendaE = document.querySelector("#editarCpf_venda");

  inputVenda.addEventListener('keypress', () => {
    const inputLength = inputVenda.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputVenda.value += "."
    } else if (inputLength == 11) {
      inputVenda.value += "-"
      console.log(parseInt(inputVenda.value))
    }

  });


  inputVendaE.addEventListener('keypress', () => {
    const inputLength = inputVendaE.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputVendaE.value += "."
    } else if (inputLength == 11) {
      inputVendaE.value += "-"
      console.log(parseInt(inputVendaE.value))
    }

  });

</script>

<script type="text/javascript">
  const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }

  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }
</script>

<?php include("rodape.php"); ?>
<script src="SCRIPT/scriptVenda.js"></script>