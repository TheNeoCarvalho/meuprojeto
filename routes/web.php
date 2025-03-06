<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

//  /dash -> Dashboard
Route::get('/dash', function(){
    return view('dashboard');
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/contatos', function(){
    return view('contatos');
});

Route::get('/projetos', function(){
    return view('projetos');
});

Route::get('/', function(){
    $usuarios = User::paginate(10);
    return view('home', ['usuarios' => $usuarios]);
});

Route::get('clientes', function(String $id){
    $usuario = User::where('id', 50)->get();
    return view('clientes', [ 'usuario' => $usuario] );
});
