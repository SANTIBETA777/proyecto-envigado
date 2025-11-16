<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Crear Cliente</h1>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            @error('nombre') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
            @error('email') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control">
            @error('telefono') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control">
            @error('direccion') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button class="btn btn-primary">Guardar</button>
    </form>

</body>
</html>
