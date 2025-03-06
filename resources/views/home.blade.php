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
                            Ver | Editar | Editar
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $usuarios->links(); }}
    @endsection
