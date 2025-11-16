<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Empleados</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver a Home</a>

    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Crear Empleado</a>

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
                <th>Cargo</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>{{ $empleado->salario }}</td>

                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar empleado?')">
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
