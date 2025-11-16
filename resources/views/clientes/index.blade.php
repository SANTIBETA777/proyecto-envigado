<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Clientes</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver a Home</a>

    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Crear Cliente</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>

                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar cliente?')">
                                Eliminar
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
