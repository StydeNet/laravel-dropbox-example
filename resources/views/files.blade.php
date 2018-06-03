<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropbox - Styde.net</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <h1 class="mt-4 mb-4">Stydebox</h1>
                
                <div class="card">
                    <div class="card-header">Archivos en Dropbox</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Tamaño</th>
                                    <th>Extensión</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->sizeInKb }} KB</td>
                                    <td>{{ $file->extension }}</td>
                                    <td>
                                        <a href="{{ $file->public_url }}" target="_blank" class="btn btn-primary btn-sm">Enlace publico</a>
                                        <a href="{{ route('files.download', $file) }}" class="btn btn-secondary btn-sm">Descargar</a>
                                        <form action="{{ route('files.destroy', $file) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Subir nuevo archivo</div>
                    <div class="card-body">
                        <form action="{{ route('files.store') }}" class="form-inline" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control mr-4" required>    
                            <button type="submit" class="btn btn-primary">Agregar nuevo archivo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>