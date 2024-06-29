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
</div>
