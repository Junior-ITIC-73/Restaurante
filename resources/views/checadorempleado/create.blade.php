<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('altacheck')}}" method="POST">
    {{ csrf_field() }}

    <select name="empleado_id">
        @foreach ($a2 as $a4)
        <option value="{{$a4->id}}">
        {{$a4->name}} </option>
        @endforeach
        </select>

<label>hora</label>
<input type="text" name="hora_entrada">
<button type="submit">Alles!</button>
</body>
</html>
