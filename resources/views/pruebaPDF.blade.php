<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/pdf.css"
</head>
<body>
        <p>Listado de usuarios</p>
        <!-- <img src="{{asset('images.png')}}" alt="Logo" height="75px"> -->
        <table>
        <thead>
        <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
</body>
</html>