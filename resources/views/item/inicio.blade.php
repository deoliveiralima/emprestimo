@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary mb-3" href="{{route('item.adiciona')}}">Adicinar Item</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Código</th>
                        <th scope="col">Observação</th>
                        <th scope="col">alterações</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($itens as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->codigo}}</td>
                                <td>{{$item->observacao}}</td>
                                <td>
                                    <a  class="btn btn-success d-inline" href="{{route('item.edita', ['item'=>$item->id])}}" role="button">Modificar</a> 
                                    
                                    <button id="btnModal" class="btn btn-primary" data-target-id="{{ $item->id }}" data-toggle="modal" > Excluir </button>
                                    
                                    <form method="POST" class="d-inline" action="{{route('item.exclui', ['item'=>$item->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Excluir</button>

                                    </form>
                                     
                                </td>
                            </tr>
                            
                        @endforeach
            
                    </tbody>
                  </table>

                  <div class="modal" id="modalConfirmaExclusaoItem" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Confirmar exclusão de: </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <div class="modal-body row d-flex justify-content-center" >
                            <form action="/item/" id="formConfirmaExclusaoItem" class="form-horizontal" method="post">

                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <div id="pass_id"></div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
               
            </div>
          

    </div>
</div>


@endsection


@section('script')
<--!  Scrip para ativar o modal e passar o id do item que será excluido-->
<script type="text/javascript">

    
$(document).on("click", "#btnModal", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
     alert('12'); 
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#modalConfirmaExclusaoItem').modal('show');
});

</script>


@endsection
