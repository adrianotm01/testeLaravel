<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['id','cor','portas','tipo','combustivel','chassi','ano','placa','nome','pessoa_id'];
    
    protected $table = 'carros';
    
    public $timestamps = false;
    public function pessoasUma()
    {
        return $this->belongsTo('App\Pessoa');
    }
}
