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
@endsection
