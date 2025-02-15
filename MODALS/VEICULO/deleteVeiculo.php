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
</div>
