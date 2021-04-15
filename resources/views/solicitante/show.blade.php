@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 80%;">
        <div class="card-body">
        <h5 class="card-title">{{$solicitante->nome}}}}</h5>
       
        <p class="card-text h5">Nome: {{$solicitante->nome}}</p>
        <p class="card-text h5">E-mail: {{$solicitante->email}} </p>
        <p class="card-text h5">Contato: {{$solicitante->contato}} </p>
        <div class="d-flex justify-content-start">
        <a href="/solicitante/{{$solicitante->id}}/edita" class="btn btn-primary mr-3">Alterar</a>
        <modal-confirma-solicitante solicitante-id="{{$solicitante->id}}" solicitante-nome="{{$solicitante->nome}}"> </modal-confirma>
        </div>
        </div>
    </div>

</div>

@include('solicitante.modalexclusao')

@endsection