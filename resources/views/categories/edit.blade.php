<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Categoría</title>
</head>
<body>
    <div class="container">
        <h1>Editar Categoría</h1>
        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled="disabled" value="{{ $category->id }}">
                <div class="form-text">ID de la Categoría</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('categories.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
