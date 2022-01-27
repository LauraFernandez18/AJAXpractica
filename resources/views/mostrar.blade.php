<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/ajax.js"></script>
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">
    <title>Hotel</title>
</head>
<body class="mostrar">
    <div class="crear">
        <form action="{{url('crear')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <p>Título</p>
            <input type="text" name="titulo" placeholder="Introduce el titulo...">
            <br>
            <p>Descripción</p>
            <input type="text" name="descripcion" placeholder="Introduce la descripción...">
            <br><br>
            <div>
                <input type="submit" class="btn btn-success" name="enviar">
            </div>
    </div>
    <div class="tabla">
        <table class="table">
            <tr class="active">
                <th>TITULO</th>
                <th>DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
            @foreach($notes as $note)
                <tr>
                    <td>{{$note->titulo}}</td>
                    <td>{{$note->descripcion}}</td>
                    <td>
                        {{-- Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])->name('clientes.edit'); --}}
                        <form>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="_method" value="GET">
                            <button class= "btn btn-secondary" type="submit" value="Edit" onclick="modal(); return false;">Editar</button>
                        </form>
                    </td>
                    <td>
                        {{-- Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy'])->name('clientes.destroy'); --}}
                        <form method="post">
                            <input type="hidden" name="_method" value="DELETE" id="deleteCliente">
                            <button class= "btn btn-danger" type="submit" value="Delete" onclick="eliminar({{$note->id}}); return false;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach       
        </table>
    </div>  
</body>
</html>