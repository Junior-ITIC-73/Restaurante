<table  align="center" style="text-align: center; border-color: #0F6766" border="2">
        <thead>
        <tr>
            <th colspan="1"><center>
                <img src="tasty/images/logo1.jpeg"  width="150%"><b style="color: red;"></b></center></th>
            <th colspan="4">
                <b>ARBOLEDA RESTAURANTE</b><br>
                <b>TELEFONO : </b><br>7223423640<br>
                <b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
                <b>CORREO : </b> <br>arboleda@arboledarestaurante.com
            </th>
        </tr>
        <tr>
            <td colspan="5" style="text-align: center;"><b>LISTADO CATEGORIA PLATILLOS</b></td>
        </tr>
        <tr></tr>
        <tr>
            <th  style="text-align: center;"><b>ID</b></th>
            <th><b>NOMBRE</b></th>
        </tr>
        </thead>    
        <tbody>
        @foreach($categoriaplatillos as $categoriaplatillo)
        <tr>
            <td style="border-color: #0F6766; text-align: center;"><center>{{$categoriaplatillo->id}}</center></td>
            <td style="border-color: #0F6766">{{$categoriaplatillo->nombre_categoria}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
