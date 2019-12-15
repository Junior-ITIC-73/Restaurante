<table style="text-align: center; border-color: #0F6766" border="2">
    <thead>
        <tr>
            <th colspan="1"><center><img src="tasty/images/logo1.jpeg"  width="150%" style="display: block; margin: auto;" ></center></th>
             <th colspan="3" style="text-align: center; background-color: red;">
                <b>ARBOLEDA RESTAURANTE</b><br>
                <b>TELEFONO : </b><br>7223423640<br>
                <b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
                <b>CORREO : </b> <br>arboleda@arboledarestaurante.com
            </th>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center;"><b>LISTADO DE PLATILLOS</b></td>
        </tr>
        <tr></tr>
        <tr>
            <th><b>CATEGORIA</b></th>
            <th><b>NOMBRE</b></th>
            <th><b>PRECIO</b></th>
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