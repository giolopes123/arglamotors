<?php  
require_once("CONTROLLER/clienteController.php");
require_once("nav.php");
?>

<title>CLIENTES | ArglaMotors</title>

<div class="container-xl">
    <?php 
		include("MSG/msgs.php"); ?>
    <div>
        <div>
            <div>
                <div class="row">
                    <div class="col-6">
                        <h2>Gerenciar <b>Clientes</b></h2>
                    </div>
                    <div class="col-6 text-right">
    					<a href="#addClienteModal" class="btn btn-success btn-sm" data-toggle="modal" style="width: 150px;">
       					<i class="material-icons align-middle" style="font-size: 20px; vertical-align: middle;">&#xE147;</i> 
        				<span class="align-middle">Add Cliente</span>
  						</a>
					</div>
                </div>

                <div class="row">
                    <form method="GET" class="col-12 mb-2">
                        <div class="input-group">
                            <input class="form-control py-2" type="search" name="pesquisa" placeholder="Pesquisar usuários" value="" id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" name="acao" value="Pesquisar">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
							<tr>
                       			<th class="col-3" style="text-align: center;">Foto</th>
                        		<th class="col-3" style="text-align: center;">Nome</th>
                      			<th class="col-4" style="text-align: center;">Email</th>
                       			<th class="col-2"style="text-align: center;">Telefone</th>
                       			<th style="text-align: center;">Ações</th>
                    </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clientes as $cliente){ ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <img src="UPLOADS/CLIENTES/<?=$cliente['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">
                                    </td>
                                    <td style="text-align: center;"><?=$cliente['nome_cliente']?></td>
                                    <td style="text-align: center;"><?=$cliente['email']?></td>
                                    <td style="text-align: center;"><?=$cliente['telefone']?></td>
                                    <td style="text-align: center;">
                                        <a href="#editClienteModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar" onclick="setDadosModalEditar('<?=$cliente['cod']?>','<?=$cliente['nome_cliente']?>','<?=$cliente['cpf_cliente']?>','<?=$cliente['email']?>','<?=$cliente['endereco']?>','<?=$cliente['telefone']?>','<?=$cliente['senha']?>','<?=$cliente['rg']?>','<?=$cliente['foto']?>','<?=$cliente['estado_civil']?>','<?=$cliente['nome_conjuge']?>','<?=$cliente['cpf_conjuge']?>')">&#xE254;</i></a>
                                        <a href="#deleteClienteModal" class="Excluir" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir" onclick="setDadosModalExcluir(<?=$cliente['cod']?>)">&#xE872;</i></a>
                                        <a href="#detalhesClienteModal" data-toggle="modal" onclick="abrirDetalhes('<?=$cliente['estado_civil']?>','<?=$cliente['nome_conjuge']?>','<?=$cliente['cpf_conjuge']?>','<?=$cliente['endereco']?>','<?=$cliente['senha']?>','<?=$cliente['rg']?>','<?=$cliente['cpf_cliente']?>')"><i class="material-icons">format_list_bulleted</i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Adicionar Modal HTML -->
<div id="addClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar Cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome do Clliente</label>
						<input type="text" class="form-control" required name="nome_cliente">
					</div>
					<div class="form-group">
						<label>CPF do Cliente</label>
						<input type="text" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off" id="cpf_cliente" class="form-control" required name="cpf_cliente">
					</div>
					<div class="form-group">
						<label>Estado Civil</label>
						<input type="text" class="form-control" required name="estado_civil">
					</div>
					<div class="form-group">
						<label>Nome do Conjuge</label>
						<input type="text" class="form-control" name="nome_conjuge">
					</div>
					<div class="form-group">
						<label>CPF do Conjuge</label>
						<input type="text" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off" id="cpf_conjuge" class="form-control" name="cpf_conjuge">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required name="email">
					</div>							
					<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control" required name="senha">
					</div>
					<div class="form-group">
						<label>Endereco</label>
						<textarea class="form-control" required name="endereco"></textarea>
					</div>					
					<div class="form-group">
						<label>RG</label>
						<input type="number" class="form-control" required name="rg">
					</div>	
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" maxlength="15" onkeyup="handlePhone(event)" placeholder="(xx) 9.xxxx-xxxx" class="form-control" required name="telefone" autocomplete="off">
					</div>	
					<div class="form-group">
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile02" name="foto">
							    <label class="custom-file-label" for="inputGroupFile02">Escolha uma foto</label>
							</div>
						</div>	
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
<div id="editClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data"> 
				<div class="modal-header">						
					<h4 class="modal-title">Editar dados do cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group d-flex justify-content-center">
						<img id="editarFotoPreview" src="UPLOADS/CLIENTES/<?=$cliente['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">		
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
						<input type="password" class="form-control" required id="editarSenha" name="senha">
					</div> 
					<div class="form-group">
						<label>Nome Cliente</label>
						<input type="text" class="form-control" required id="editarNome_cliente" name="nome_cliente">
					</div> 
					<div class="form-group">
						<label>CPF Cliente</label>
						<input type="text" class="form-control" required id="editarCpf_cliente" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off" name="cpf_cliente">
					</div> 
					<div class="form-group">
						<label>Estado Civil</label>
						<input type="text" class="form-control" required id="editarEstado_civil" name="estado_civil">
					</div>
					<div class="form-group">
						<label>Nome Conjuge</label>
						<input type="text" class="form-control" id="editarNome_conjuge" name="nome_conjuge">
					</div>	
					<div class="form-group">
						<label>CPF Conjuge</label>
						<input type="text" class="form-control" id="editarCpf_conjuge" placeholder="xxx.xxx.xxx-xx" maxlength="14" autocomplete="off" name="cpf_conjuge">
					</div>				
					<div class="form-group">
						<label>RG</label>
						<input type="number" class="form-control" required id="editarRg" name="rg">
					</div>
					<div class="form-group">	
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="editarFoto" name="foto">
							    <label class="custom-file-label" for="editarFoto">Escolha uma foto</label>
							</div>
						</div>	
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
<!-- Visualizar detalhes modal-->
<div id="detalhesClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST"> 
				<div class="modal-header">						
					<h4 class="modal-title">Mais dados do cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>CPF Cliente</label>
						<input type="text" class="form-control" id="verCpf_cliente" name="cpf_cliente" disabled>
					</div>	
					<div class="form-group">
						<label>RG</label>
						<input type="number" class="form-control" id="verRg" name="rg" disabled>
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
						<label>Estado Civil</label>
						<input type="text" class="form-control" id="verEstado_civil" name="estado_civil" disabled>
					</div>
					<div class="form-group">
						<label>Nome Conjuge</label>
						<input type="text" class="form-control" id="verNome_conjuge" name="nome_conjuge" disabled>
					</div>	
					<div class="form-group">
						<label>CPF Conjuge</label>
						<input type="text" class="form-control" id="verCpf_conjuge" name="cpf_conjuge" disabled>
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
<div id="deleteClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Excluir Cliente</h4>
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
  const inputCliente = document.querySelector("#cpf_cliente");
  const inputConjuge = document.querySelector("#cpf_conjuge");
  const inputClienteE = document.querySelector("#editarCpf_cliente");
  const inputConjugeE = document.querySelector("#editarCpf_conjuge");

  inputCliente.addEventListener('keypress', () => {
    const inputLength = inputCliente.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputCliente.value += "."
    } else if (inputLength == 11) {
      inputCliente.value += "-"
      console.log(parseInt(inputCliente.value))
    }

  });

  inputConjuge.addEventListener('keypress', () => {
    const inputLength = inputConjuge.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputConjuge.value += "."
    } else if (inputLength == 11) {
      inputConjuge.value += "-"
    }

  });

  inputClienteE.addEventListener('keypress', () => {
    const inputLength = inputClienteE.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputClienteE.value += "."
    } else if (inputLength == 11) {
      inputClienteE.value += "-"
      console.log(parseInt(inputClienteE.value))
    }

  });

  inputConjugeE.addEventListener('keypress', () => {
    const inputLength = inputConjugeE.value.length;
    
    if (inputLength == 3 || inputLength == 7) {
      inputConjugeE.value += "."
    } else if (inputLength == 11) {
      inputConjugeE.value += "-"
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
<script src="SCRIPT/scriptCliente.js"></script>
