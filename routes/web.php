<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bemvindo');
});
Route::get('/codigo/{id}', 'PessoaControlador@codigo');
Route::get('/editar', 'PessoaControlador@editar');
Route::post('/atualizar', 'PessoaControlador@atualizar');
Route::get('/teste',function ()
{
    return view('teste');
});
Route::get('/listar', 'PessoaControlador@indice');
Route::get('/cadastrar', 'PessoaControlador@cadastro');
Route::get('/cadastrarCarro/{id}', 'Carrocontrolador@guardarCarro');
Route::post('/guardar', 'PessoaControlador@guardar');