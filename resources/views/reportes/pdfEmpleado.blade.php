<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		 @page {
                margin: 100px 25px;
                align-content: center;
            }
		header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color:  #0F6766;
                color: white;
                text-align: center;
                line-height: 35px;
            }
		footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #0F6766;
                color: white;
                text-align: center;
                line-height: 35px;
            }

	</style>
</head>
<body>
	<center>

	   <header>
           REPORTE DE EMPLEADOS
        </header>


<table align="center">
	<tr>
		<td align="center">
			<img src="https://drive.google.com/uc?id=1sUqoZlVzzcpzQz8IXSon7pJ_9ML0IUd1"style="width:35%">
		</td>
		<td align="center">
			<b>ARBOLEDA RESTAURANTE</b><br>
			<b>TELEFONO : </b> <br>7223423640<br>
			<b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
			<b>CORREO : </b> <br>arboleda@arboledarestaurante.com
		</td>
		<td align="center">
			<label style="background-color: #0F6766; width: 80%; color: #FFFFFF">FECHA DE REPORTE</label><br>
			{{$date}}<br>
		</td>
	</tr>
</table>

<center>
<table  align="center" style="text-align: center; border-color: #0F6766" border="2">
        <thead>
        <tr style="background-color: #0F6766; width: 80%; color: #FFFFFF">
            <th><b>NOMBRE</b></th>
            <th><b>APELLIDO PATERNO</b></th>
            <th><b>APELLIDO MATERNO</b></th>
            <th><b>SEXO</b></th>
            <th><b>TELEFONO</b></th>
            <th><b>DIRECCION</b></th>
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
            <td style="text-align: left; border-color: #0F6766 ">
                <ul>
                    {{-- <li><b>MUNICIPIO:</b>{{$empleado->}}</li> --}}
                    <li><b>LOCALIDAD:</b>{{$empleado->localidad}}</li>
                    <li><b>CALLE:</b> {{$empleado->calle}}</li>
                    <li><b>N# interior:</b> {{$empleado->num_interior}}</li>
                    <li><b>N# exterior:</b> {{$empleado->num_exterior}}</li>
                    <li><b>CALLE:</b> {{$empleado->calle}}</li>
                    <li><b>CP:</b> {{$empleado->CP}}</li>
                </ul>   
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</center>


<footer>
            Copyright &copy; ARBOLEDA RESTAURANTE
</footer>
</body>
</html>