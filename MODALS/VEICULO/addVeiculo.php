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
</div>
