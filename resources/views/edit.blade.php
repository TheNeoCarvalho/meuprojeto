@extends('partials.app') 
@section('content')
    <h1>Cliente</h1>
   
      <form action="{{ route('edit', $usuario[0]->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{ $usuario[0]->name}}">
        <br>
        <input type="text" name="email" value="{{ $usuario[0]->email}}">
        <br>
        <button>Salvar</button>
    </form>
   

@endsection