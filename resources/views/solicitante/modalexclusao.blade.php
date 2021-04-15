<div class="modal" tabindex="-1" id="modalConfirmaExclusaoSolicitante" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <p>Você tem certeza que deseja deletar este solicitante</p>
        <p id="nomeSolicitante" class="h2"></p>
        </div>
        <div class="modal-footer">
        
        <form id="formExclusaoSolicitante" method="POST" action="">
            @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Excluir</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>

        </form>
        
       
        </div>
    </div>
    </div>
</div>