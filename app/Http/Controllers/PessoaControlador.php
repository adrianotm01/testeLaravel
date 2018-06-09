<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Pessoa;
use App\Carro;
class PessoaControlador extends Controller
{
    private $carrocontrolador;
    public function __construct(CarroControlador $carrocontrolador) {
        $this->carrocontrolador = $carrocontrolador;
    }
    public function indice()
    {
        $lista = Pessoa::all();
        
        return view('pessoas.listar',['nome' => $lista]);
    }

    public function cadastro()
    {
        return view('pessoas.cadastrar');
    }
    public function editar(Request $request)
    {
        $id = $request->input('id');
        return view('pessoas.editar',['lista'=> Pessoa::find($id)]);
    }
    public function codigo($id)
    {
        $pessoa = Pessoa::find($id);
        return response()->json(['nome'=> $pessoa->nome,'idade' =>$pessoa->idade]);
    }
    public function guardar(Request $request)
    {
        
        $person = Pessoa::create($request->all());
        if ($request->nomeCarro) {
            $carro = new Carro();
            $carro->nome = $request->nomeCarro;
            $carro->placa = $request->placa;
            $carro->cor = $request->cor;
            $carro->chassi = $request->chassi;
            $carro->tipo = $request->tipo;
            $carro->combustivel = $request->combus;
            $carro->portas = $request->portas;
            $carro->ano = $request->ano;
            $carro->pessoa_id = $person->id;
            $this->carrocontrolador->guardar($carro);
        }
       return redirect('cadastrar')->with('message','Cadastrado com sucesso');
    }
    public function atualizar(Request $request)
    {
       $pessoa = Pessoa::find($request->id);
       $pessoa->nome = $request->nome;
       if (isset($request->idade)) {
        $pessoa->idade= $request->idade;       
    }
       
       $pessoa->save();
        return redirect('listar');
    }
}
