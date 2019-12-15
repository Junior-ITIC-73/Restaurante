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
           REPORTE DE MENU PLATILLOS
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
            <th><b>CATEGORIA</b></th>
            <th><b>NOMBRE PLATILLO</b></th>
            <th><b>PRECIO PALTILLO</b></th>
            <th><b>DESCRIPCIÓN</b></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($menu_platillos as $menu_platillo)
            <tr>
            <td style="border-color: #0F6766">{{$menu_platillo->categoria->nombre_categoria}}
            </td>
            <td style="border-color: #0F6766">{{$menu_platillo->nombre_platillo}}</td>
            <td style="border-color: #0F6766">{{$menu_platillo->precio_platillo}}</td>
            <td style="border-color: #0F6766">{{$menu_platillo->descripcion_platillo}}</td>
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