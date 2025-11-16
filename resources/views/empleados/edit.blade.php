<!DOCTYPE html>
<html>
<head>
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Editar Empleado</h1>

    <a href="{{ route('empleados.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control" required>
            @error('nombre') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" value="{{ $empleado->apellido }}" class="form-control">
            @error('apellido') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ $empleado->email }}" class="form-control" required>
            @error('email') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Cargo</label>
            <input type="text" name="cargo" value="{{ $empleado->cargo }}" class="form-control">
            @error('cargo') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Salario</label>
            <input type="number" name="salario" value="{{ $empleado->salario }}" class="form-control" step="0.01">
            @error('salario') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>

</body>
</html>
