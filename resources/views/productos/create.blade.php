<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

    <h1 class="mb-4">Crear Producto</h1>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            @error('nombre') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
            @error('descripcion') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
            @error('precio') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" required>
            @error('stock') <p class="text-danger">{{ $message }}</p> @enderror
        </div>

        <button class="btn btn-primary">Guardar</button>
    </form>

</body>
</html>
