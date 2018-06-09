<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Pessoa extends Model
{
    protected $fillable = array('id','nome','idade');
    protected $table = "pessoas";
    public $timestamps = false;
    public function muitosCarros()
    {
       return $this->hasMany('App\Carro');
    }
}
