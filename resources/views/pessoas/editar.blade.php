@extends('bemvindo')
@section('titulo','Editar cadastro')

@section('content')
    <div class="col-md-12">
        <h3 class="col-md-12">Dados cadastrais </h3>
    </div>
    <div class="form col-md-12">
        <form action="{{url('atualizar')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$lista->id}}">
            <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="nome" class="form-control" value="{{$lista->nome}}" required>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" name="idadeNova" value="{{$lista->idade}}" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Editar</button>
        </form>
    </div>
@endsection