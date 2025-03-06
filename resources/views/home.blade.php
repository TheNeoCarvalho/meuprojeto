    @extends('partials.app') 
    @section('content')  
        <table border="1">
            <theader>
                <td>id</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
            </theader>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email}}</td>
                        <td class="actions">
                            <a class="btn" href="/clientes/{{$usuario->id}}">Ver</a> <a class="btn" href="/clientes/{{ $usuario->id}}/edit">Editar</a>
                            <form action="/clientes/{{ $usuario->id}}/delete" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn" type="submit">Excluir</a></td>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $usuarios->links(); }}
    @endsection
