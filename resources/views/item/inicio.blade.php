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
                                    <div class="d-flex flex-row">
                                    <a  class="btn btn-success d-inline mr-2" href="{{route('item.edita', ['item'=>$item->id])}}" role="button">Modificar</a> 
                                    
                                   <modal-confirma item-id="{{$item->id}}" item-nome="{{$item->nome}}"> </modal-confirma>
                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                        {{ $itens->links() }}
            
                    </tbody>
                  </table>
            </div>
    </div>
</div>
    <div class="modal" tabindex="-1" id="modalConfirmaExclusao" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Confirmação</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>Você tem certeza que deseja deletar este item</p>
            </div>
            <div class="modal-footer">
            
            <form id="formExclusaoItem" method="POST" action="">
                @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>

            </form>
            
           
            </div>
        </div>
        </div>
    </div>


@endsection

