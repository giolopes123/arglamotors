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
                        <label>Quilometragem</label>
                        <input type="text" class="form-control" id="verQuilometragem" name="quilometragem" disabled>
                    </div>
                    <div class="form-group">
                        <label>Ano de Fabricação</label>
                        <input type="number" class="form-control" min="1900" max="2100" step="1" id="verAno_de_fabricacao" name="ano_de_fabricacao" disabled>
                    </div>    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Fechar">
                </div>
            </form>
        </div>
    </div>
</div>
