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

Route::get('clientes/{id}', function(String $id){
    $usuario = User::where('id', $id)->get();
    return view('clientes', [ 'usuario' => $usuario] );
});

Route::get('clientes/{id}/edit', function(String $id){
    $usuario = User::where('id', $id)->get();
    return view('edit', [ 'usuario' => $usuario] );
});

Route::put('clientes/{id}/edit', function(String $id, Request $request){
    
    $validated = $request->validate([
        'name' => 'required|max:155',
        'email' => 'required|email',
    ]);

    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();
    return redirect('/');
})->name('edit');

Route::delete('clientes/{id}/delete', function(String $id){
    
    $user = User::find($id);
    $user->delete();
    return redirect('/');
})->name('delete');