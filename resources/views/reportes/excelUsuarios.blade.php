<table  align="center" style="text-align: center; border-color: #0F6766" border="2">
        <thead>
        <tr>
            <th><center><img src="tasty/images/logo1.jpeg"  width="150%"><b style="color: red;"></b></center></th>
            <th colspan="6" style="text-align: center; background-color: red;">
                <b>ARBOLEDA RESTAURANTE</b><br>
                <b>TELEFONO : </b><br>7223423640<br>
                <b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
                <b>CORREO : </b> <br>arboleda@arboledarestaurante.com
            </th>
        </tr>
        <tr>
            <td colspan="7" style="text-align: center;"><b>LISTADO DE USUARIOS</b></td>
        </tr>
        <tr></tr>
        <tr>
           {{--  <th colspan="4"><img src="tasty/images/logo1.jpeg"  width="150%"></th> --}}
            <th><b>NAME</b></th>
            <th><b>EMAIL</b></th>
            <th><b>SEXO</b></th>
            <th colspan="4" style="text-align: center;"><b>DIRECCION</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td style="border-color: #0F6766">{{$user->name}}</td>
            <td style="border-color: #0F6766">{{$user->email}}</td>
            @if(is_null($user->sexo))
                <td style="border-color: #0F6766">SIN DEFINIR</td>
            @else
                @if($user->sexo == 0)
                    <td style="border-color: #0F6766">HOMBRE</td>
                @else
                    <td style="border-color: #0F6766">MUJER</td>
                @endif
            @endif
            <td><b>TEL:</b> {{$user->telefono_user}}</td>
            <td><b>CALLE:</b> {{$user->calle}}</td>
            <td><b>LOCALIDAD:</b> {{$user->localidad}}</td>
            <td><b>CP:</b> {{$user->CP}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
