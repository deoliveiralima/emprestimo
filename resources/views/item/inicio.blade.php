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
                                    
                                   <modal-confirma item-id="{{$item->id}}" item-nome="{{$item->nome}}"> </modal-confirma>
                                    
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
            </div>
    </div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="modalConfirmaExclusao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirma exclusão de <span id="nomeItem"> </span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-flex justify-content-center align-items-center ">
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

