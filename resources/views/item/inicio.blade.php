@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Código</th>
                        <th scope="col">Observação</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($itens as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->codigo}}</td>
                                <td>{{$item->observacao}}</td>
                            </tr>
                            
                        @endforeach
            
                    </tbody>
                  </table>
               
            </div>
          

    </div>
</div>
@endsection
