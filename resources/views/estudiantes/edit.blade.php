<!DOCTYPE html>
<html>
<head>
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Editar Estudiante</h1>

    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" value="{{ $estudiante->apellido }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ $estudiante->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" value="{{ $estudiante->telefono }}" class="form-control">
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>

</body>
</html>
