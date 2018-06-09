@extends('bemvindo')
@section('titulo','Bem vindo ao lar')
@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
        
            @for($i = 0;$i < count($nome);$i++)
            
            <tr>
                <td>{{$nome[$i]->nome}}</td>
                <td>{{$nome[$i]->idade}}</td>
                <td><button type="button" data-toggle="modal" data-target="#myModal" >Ver detalhes</button></td>
                <form method="GET" action="{{url('cadastrarCarro/'.$nome[$i]->id)}}">
                <td><button type="submit">Cadastrar carros</button></td>
                </form>
                <form action="{{url('editar')}}" method="GET">
                  <input type="hidden" name="id" value="{{$nome[$i]->id}}">
                  <td><button type="submit">Editar</button></td>
                </form>
             <!--   <form action="{{url('codigo/'.$nome[$i]->id)}}" method="GET">
                  <td><button type="submit">Ver codigo</button></td>
                </form>
                -->
            </tr>
            @endfor
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
                    @for($j = 0; $j < count($nome[0]->muitosCarros);$j++)
                        {{$nome[0]->muitosCarros[$j]->placa}}
                    @endfor
                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
    
  </div>
</div>

  </div>
    
@endsection
