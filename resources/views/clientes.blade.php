@extends('partials.app') 
@section('content')
    <h1>Cliente</h1>
   
        <b>Nome:</b> {{ $usuario[0]->name }}
        <br>
        <b>Email:</b> {{ $usuario[0]->email }}
   

@endsection