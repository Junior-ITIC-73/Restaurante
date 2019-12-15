<table style="text-align: center; border-color: #0F6766" border="2">
    <thead>
        <tr>
            <th colspan="2"><center><img src="tasty/images/logo1.jpeg"  width="150%" style="display: block; margin: auto;" ></center></th>
             <th colspan="9" style="text-align: center; background-color: red;">
                <b>ARBOLEDA RESTAURANTE</b><br>
                <b>TELEFONO : </b><br>7223423640<br>
                <b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
                <b>CORREO : </b> <br>arboleda@arboledarestaurante.com
            </th>
        </tr>
        <tr>
            <td colspan="11" style="text-align: center;"><b>LISTADO DE EMPLEADOS</b></td>
        </tr>
        <tr></tr>
        <tr>
            <th><b>NOMBRE</b></th>
            <th><b>APELLIDO PATERNO</b></th>
            <th><b>APELLIDO MATERNO</b></th>
            <th><b>SEXO</b></th>
            <th><b>TELEFONO</b></th>
            <th colspan="6" style="text-align: center;"><b>DIRECCION</b></th>        
        </tr>
    </thead>
    <tbody>
         @foreach($empleados as $empleado)
        <tr>
            <td style="border-color: #0F6766">{{$empleado->name}}</td>
            <td style="border-color: #0F6766">{{$empleado->apellido_paterno}}</td>
            <td style="border-color: #0F6766">{{$empleado->apellido_materno}}</td> 
            @if(is_null($empleado->sexo))
                <td style="border-color: #0F6766">SIN DEFINIR</td>
            @else
                @if($empleado->sexo == 0)
                    <td style="border-color: #0F6766">HOMBRE</td>
                @else
                    <td style="border-color: #0F6766">MUJER</td>
                @endif
            @endif

            <td style="border-color: #0F6766">{{$empleado->telefono_empleado}}</td>
            <td style="text-align: center;"><b>LOCALIDAD:</b>{{$empleado->localidad}}</td>
            <td><b>CALLE:</b> {{$empleado->calle}}</td>
            <td><b>N# interior:</b> {{$empleado->num_interior}}</td>
            <td><b>N# exterior:</b> {{$empleado->num_exterior}}</td>
            <td><b>CALLE:</b> {{$empleado->calle}}</td>
            <td><b>CP:</b> {{$empleado->CP}}</td>
        </tr>
        @endforeach
    </tbody>
</table>