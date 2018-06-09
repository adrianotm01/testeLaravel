@extends('bemvindo')
@section('titulo','Cadastrar')

@section('content')
    <div class="col-md-12">
        <h3>Cadastrar Nova pessoa</h3>
    </div>
    <form action="{{url('guardar')}}" method="POST">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input required class="form-control" type="text" placeholder="Digite seu Nome" name="nome">
            </div>

            <div class="form-group col-md-6">
                <label>Idade</label>
                <input  required class="form-control" type="number" placeholder="Digite sua idade" name="idade" max="100">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nome do carro</label>
                <input required class="form-control" type="text" placeholder="Digite o nome do seu carro" name="nomeCarro">
            </div>

            <div class="form-group col-md-3">
                <label>Placa do carro</label>
                <input required style="text-transform:uppercase"class="form-control" type="text" placeholder="YYY1234" name="placa">
            </div>
            <div class="form-group col-md-3">
                <label>Cor</label>
                <input class="form-control" type="text" placeholder="Vermelho,Azul,Branco" name="cor" required>
            </div>
            <div class="form-group col-md-3">
                <label>Ano</label>
                <select name="ano" class="form-control" required>
                    <option value=" ">Selecione</option>
                    @for($y = 1955;$y <= date('Y');$y++)
                        <option value="{{$y}}">{{$y}}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Chassi</label>
                <input style="text-transform:uppercase" class="form-control" required type="text" placeholder="XXXXXXXXXXXXX" name="chassi" maxlenght="17"/>
            </div>
            <div class="form-group col-md-3">
                <label>Tipo</label>
                <input class="form-control" type="text" placeholder="Hatch, SUV, Sedan" name="tipo" required/>
            </div>
            <div class="form-group col-md-3">
                <label>Combustivel</label>
                <input class="form-control" type="text" placeholder="Alcool, Diesel," name="combus" required/>
            </div>
            <div class="form-group col-md-3">
                <label>Portas</label>
                <select name="portas" class="form-control">
                    <option value=" ">Selecione</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
            <button style="margin-top:20px " type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection