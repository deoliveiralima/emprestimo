@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{route ('solicitante.salva')}}">
                @csrf
                @method('POST')
                <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do solicitante">
                </div>

                <div class="form-group">
                    <label for="email">e-mail: </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="e-mail">
                </div>

                <div class="form-group">
                    <label for="contato">Contato: </label>
                    <input type="text" class="form-control" name="contato" id="contato" placeholder="Contato">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                
                    <a href="/solicitante/" class="btn btn-secondary"><span class="material-icons float-left">
                    keyboard_return
                    </span> Voltar aos solicitantes</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection