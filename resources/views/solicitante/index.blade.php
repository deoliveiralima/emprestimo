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
                            <tr>
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

@include('solicitante.modalexclusao')
    
@endsection