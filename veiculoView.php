<?php  
require_once("CONTROLLER/veiculoController.php");
require_once("nav.php");
?>

<title>VEÍCULOS | ArglaMotors</title>

<div class="container">
	<?php
		include("MSG/msgs.php");	
	?>
    <div>
        <div>
            <div>
                <div class="row">
                    <div class="col">
                        <h2>Gerenciar <b>Veículos</b></h2>
                    </div>
                    <div class="col text-right" style="float: right;">
    					<a href="#addVeiculoModal" class="btn btn-success btn-sm" data-toggle="modal" style="width: 150px;">
       					<i class="material-icons align-middle" style="font-size: 20px; vertical-align: middle;">&#xE147;</i> 
        				<span class="align-middle" style="float: right;">Add Produto</span>
  						</a>
					</div>
                </div>

                <div class="row">
                    <form method="GET" class="col-12 mb-2">
                        <div class="input-group">
                            <input class="form-control py-2" type="search" name="pesquisa" placeholder="Pesquisar pela marca" value="" id="example-search-input">
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
						<th class="col-3" style="text-align: center;">Foto</th>
						<th class="col-3" style="text-align: center;">Modelo</th>
						<th class="col-4" style="text-align: center;">Marca</th>
						<th class="col-2" style="text-align: center;">Preço</th>
						<th style="text-align: center;">Ações</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($veiculos as $veiculo){ 
					?>
					<tr>
						<td style="text-align: center;">
						<img src="UPLOADS/VEICULOS/<?=$veiculo['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">
						</td>
						<td style="text-align: center;"><?=$veiculo['modelo']?></td>
						<td style="text-align: center;"><?=$veiculo['marca']?></td>
						<td style="text-align: center;"><?=$veiculo['preco']?></td>
						<td style="text-align: center;">
							<a href="#editVeiculoModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar" onclick="setDadosModalEditar('<?=$veiculo['cod']?>','<?=$veiculo['ano_de_fabricacao']?>','<?=$veiculo['cor']?>','<?=$veiculo['descricao']?>','<?=$veiculo['marca']?>','<?=$veiculo['modelo']?>','<?=$veiculo['n_chassi']?>','<?=$veiculo['n_placa']?>','<?=$veiculo['preco']?>','<?=$veiculo['quilometragem']?>','<?=$veiculo['foto']?>')">&#xE254;</i></a>
							<a href="#deleteVeiculoModal" class="Excluir" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir" onclick="setDadosModalExcluir('<?=$veiculo['cod']?>')">&#xE872;</i></a>
							<a href="#detalhesVeiculoModal" data-toggle="modal" onclick="abrirDetalhes('<?=$veiculo['n_placa']?>','<?=$veiculo['n_chassi']?>','<?=$veiculo['quilometragem']?>','<?=$veiculo['ano_de_fabricacao']?>','<?=$veiculo['descricao']?>','<?=$veiculo['cor']?>')"><i class="material-icons">format_list_bulleted</i></a>
                            </a>
						</td>
					<?php } ?>	
						
					</tr> 
                    
				</tbody>
			</table>
		</div>
	</div>        
</div>
<?php include("rodape.php"); ?>
<?php include("MODALS/VEICULO/addVeiculo.php"); ?>
<?php include("MODALS/VEICULO/editVeiculo.php"); ?>
<?php include("MODALS/VEICULO/deleteVeiculo.php"); ?>
<?php include("MODALS/VEICULO/detalhesVeiculo.php"); ?>
<!-- Adicionar Modal HTML 
<div id="addVeiculoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar Veiculo</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Marca</label>
						<input type="text" class="form-control" required name="marca">
					</div>
					<div class="form-group">
						<label>Modelo</label>
						<input type="text" class="form-control" required name="modelo">
					</div>
					<div class="form-group">
						<label>Cor</label>
						<input type="text" class="form-control" required name="cor">
					</div>
					<div class="form-group">
						<label>Número da Placa</label>
						<input type="text" class="form-control" required name="n_placa" autocomplete="off" id="n_placa">
					</div>					
					<div class="form-group">
						<label>Número do Chassi</label>
						<input type="text" class="form-control" required name="n_chassi">
					</div>	
					<div class="form-group">
						<label>Quilometragem</label>
						<input type="number" class="form-control" required name="quilometragem">
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
						<label>Ano de Fabricação</label>
						<input type="number" class="form-control" min="1900" max="2100" step="1" required name="ano_de_fabricacao">
					</div>				
					<div class="form-group">
						<label>Descrição</label>
						<textarea class="form-control" required name="descricao"></textarea>
					</div>			
					<div class="form-group">
						<label>Preço</label>
						<input type="text" class="form-control" required name="preco">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Adicionar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>-->

<!-- Delete Modal HTML 
<div id="deleteVeiculoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Excluir Veículo</h4>
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
</div>-->

<!-- Edit Modal HTML 
<div id="editVeiculoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data"> 
				<div class="modal-header">						
					<h4 class="modal-title">Editar dados do veiculo</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group d-flex justify-content-center">
						<img id="editarFoto" src="UPLOADS/VEICULOS/<?=$veiculo['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">		
					</div>				
					<input type="hidden" class="form-control" required id="editarCod" name="cod">
					<div class="form-group">
						<label>Marca</label>
						<input type="text" class="form-control" required id="editarMarca" name="marca">
					</div>
					<div class="form-group">
						<label>Modelo</label>
						<input type="text" class="form-control" required id="editarModelo" name="modelo">
					</div>
					<div class="form-group">
						<label>Cor</label>
						<input type="text" class="form-control" required id="editarCor" name="cor">
					</div>			
					<div class="form-group">
						<label>Número da Placa</label>
						<input type="text" class="form-control" required id="editarN_placa" name="n_placa">
					</div> 
					<div class="form-group">
						<label>Número do Chassi</label>
						<input type="text" class="form-control" required id="editarN_chassi" name="n_chassi">
					</div> 
					<div class="form-group">
						<label>Quilometragem</label>
						<input type="text" class="form-control" required id="editarQuilometragem" name="quilometragem">
					</div>
					<div class="form-group">
						<label>Ano de Fabricação</label>
						<input type="number" class="form-control" min="1900" max="2100" step="1" required id="editarAno_de_fabricacao" name="ano_de_fabricacao">
					</div>	
					<div class="form-group">
					<label>Descrição</label>
						<textarea class="form-control" required id="editarDescricao" name="descricao"></textarea>
					</div>
					<div class="form-group">
						<label>Preço</label>
						<input type="text" class="form-control" required id="editarPreco" name="preco">
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
</div>-->

<!-- Detalhes Modal HTML -->
<div id="detalhesVeiculoModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST"> 
				<div class="modal-header">						
					<h4 class="modal-title">Mais dados do Veículo</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<input type="hidden" class="form-control" id="verCod" name="cod">
					<div class="form-group">
						<label>Cor</label>
						<input type="text" class="form-control" id="verCor" name="cor" disabled>
					</div>	
					<div class="form-group">
						<label>Descrição</label>
						<textarea class="form-control" id="verDescricao" name="descricao" disabled></textarea>
					</div>	
					<div class="form-group">
						<label>Número da Placa</label>
						<input type="text" class="form-control" id="verN_placa" name="n_placa" disabled>
					</div>
					<div class="form-group">
						<label>Número do Chassi</label>
						<input type="text" class="form-control" id="verN_chassi" name="n_chassi" disabled>
					</div>  
					<div class="form-group">
						<label>Quilometragem</label>
						<input type="number" class="form-control" id="verQuilometragem" name="quilometragem" disabled>
					</div>
					<div class="form-group">
						<label>Ano de Fabricação</label>
						<input type="number" class="form-control" id="verAno_de_fabricacao" name="ano_de_fabricacao" min="1900" max="2100" step="1" disabled>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-info" data-dismiss="modal" value="Fechar">
				</div>
			</form>
		</div>
	</div>
</div>




<script src="SCRIPT/scriptVeiculo.js"></script>
