@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-success mb-3" href="{{route('solicitante.adiciona')}}">Adicinar Solicitante</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Contato</th>
                        <th scope="col">alterações</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitantes as $solicitante)
                            <tr class="clickable-row">
                                <th scope="row">{{$solicitante->id}}</th>
                                <td>{{$solicitante->nome}}</td>
                                <td>{{$solicitante->email}}</td>
                                <td>{{$solicitante->contato}}</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <a  class="btn btn-primary d-inline mr-2" href="{{route('solicitante.edita', ['solicitante'=>$solicitante->id])}}" role="button">Modificar</a> 
                                    
                                        <modal-confirma-solicitante solicitante-id="{{$solicitante->id}}" solicitante-nome="{{$solicitante->nome}}"> </modal-confirma>
                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                      
            
                    </tbody>
                  </table>
                  {{ $solicitantes->links() }}
            </div>
    </div>
</div>
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


@endsection

