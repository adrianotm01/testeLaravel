<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Carro;
class Carrocontrolador extends Controller
{
   public function guardarCarro($id)
   {
       # code...
    foreach (Pessoa::find($id)->muitosCarros as $carros) {
        echo $carros->nome;
    }
   }

   public function guardar(Carro $carro)
   {
        
           $carro->save();
       
   }
}
