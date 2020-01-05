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
           REPORTE DE CATEGORIAS PLATILLOS
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
            <th><b>ID</b></th>
            <th><b>NOMBRE</b></th>
        </tr>
        </tr>
        </thead>
        <tbody>
        @foreach($categoriaPlatillos as $categoriaPlatillo)
        <tr>
            <td style="border-color: #0F6766">{{$categoriaPlatillo->id}}</td>
            <td style="border-color: #0F6766">{{$categoriaPlatillo->nombre_categoria}}</td>
            {{-- <td style="border-color: #0F6766"><img style="width:85px; height:85px;" src="{{asset('imag/'.$categoriaPlatillo->imagen)}}"></td> --}}
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