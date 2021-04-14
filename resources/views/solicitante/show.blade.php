@extends('layouts.app')

@section('content')

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$solicitante->nome}}}}</h5>
       
        <p class="card-text">Nome: {{$solicitante->nome}}</p>
        <p class="card-text">E-mail: {{$solicitante->email}} </p>
        <p class="card-text">Contato: {{$solicitante->contato}} </p>

        <a href="/solicitante/{{$solictante->id}}/edita" class="btn btn-primary">Alterar</a>
        <a href="" class="card-link">Another link</a>
        </div>
    </div>


@endsection