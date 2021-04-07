@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{route ('item.store')}}">
                @csrf
                @method('POST')
                <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do item">
                </div>

                <div class="form-group">
                    <label for="codigo">Código: </label>
                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código para o item">
                </div>

                <div class="form-group">
                    <label for="observacao">Observação: </label>
                    <input type="text" class="form-control" name="observacao" id="observacao" placeholder="Obervação">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
    
@endsection