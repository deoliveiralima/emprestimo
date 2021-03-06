@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{route('item.atualiza', ['item'=>$item->id])}}">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{$item->nome}}" placeholder="Digite o nome do item">
                </div>

                <div class="form-group">
                    <label for="codigo">Código: </label>
                    <input type="text" class="form-control" name="codigo" value="{{$item->codigo}}"  id="codigo" placeholder="Código para o item">
                </div>

                <div class="form-group">
                    <label for="observacao">Observação: </label>
                    <input type="text" class="form-control" name="observacao" value="{{$item->observacao}}"  id="observacao" placeholder="Obervação">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                
                    <a href="/item/" class="btn btn-secondary"><span class="material-icons float-left">
                    keyboard_return
                    </span> Voltar aos Intens</a>
                </div>

            </form>
        </div>
    </div>
</div>
    
@endsection