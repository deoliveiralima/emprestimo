@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{route('solicitante.atualiza', ['solicitante'=>$solicitante->id])}}">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{$solicitante->nome}}" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="email">e-mail: </label>
                    <input type="email" class="form-control"  id="email" name="email" value="{{$solicitante->email}}" aria-describedby="emailHelp" placeholder="e-mail"placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="observacao">Contato: </label>
                    <input type="text" class="form-control" name="contato" value="{{$solicitante->contato}}"  id="contato" placeholder="Contato">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                
                    <a href="/solicitante/" class="btn btn-secondary"><span class="material-icons float-left">
                    keyboard_return
                    </span> Voltar aos Solicitantes</a>
                </div>

            </form>
        </div>
    </div>
</div>
    
@endsection