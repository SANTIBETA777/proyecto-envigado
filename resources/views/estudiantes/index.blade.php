<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Estudiantes</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver a Home</a>

    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Crear Estudiante</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($estudiantes as $est)
                <tr>
                    <td>{{ $est->id }}</td>
                    <td>{{ $est->nombre }}</td>
                    <td>{{ $est->apellido }}</td>
                    <td>{{ $est->email }}</td>
                    <td>{{ $est->telefono }}</td>

                    <td>
                        <a href="{{ route('estudiantes.edit', $est->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('estudiantes.destroy', $est->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar estudiante?')">
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
