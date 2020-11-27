<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideas</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div>
        <form method="GET" action="{{url('recibir')}}">
        <label for="title">Titulo</label>
            <input type="text" name="title" id="title" placeholder="Título"><br>
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="description" placeholder="Crear nota"><br>
            <br>
            <input type="submit" value="Crear">
        </form>
        <br>
    </div>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
        </tr>
        <tbody>
    @foreach ($listanotas as $notas)
        <tr>
            <td>{{$notas->id}}</td>
            <td>{{$notas->title}}</td>
            <td>{{$notas->description}}</td>
            </td>
            <td>
            <form method="get" action="{{url('/actualizar/'.$notas->id)}}">
            <button type='submit' onclick="return confirm('¿quieres ir a actualizar?');">Actualizar</button>
            </form>
            </td>
            <td>
            <form method="post" action="{{url('/borrar/'.$notas->id)}}">
            <button type='submit' onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
        
        @endforeach
        </tbody>
    </thead>
</table>

</body>
</html>