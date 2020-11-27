<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Notas</title>
</head>
<body>
<h1>Actualizar Notas</h1>
<div> 
    <form  action="{{url('modificar/'.$notas->id)}}"  method="post">
    @csrf
    {{method_field('PUT')}}
        <label>Title</label>
        <input type="text" name="title" value="{{$notas->title}}" required><br>
        <label>Description</label>
        <input type="text" name="description" value="{{$notas->description}}" required><br>
    <input type="submit" name="Enviar" value="Enviar">
    </form>
</div>
</body>
</html>