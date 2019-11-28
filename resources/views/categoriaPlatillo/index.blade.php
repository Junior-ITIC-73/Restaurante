
<!DOCTYPE html>
<html>
<head>
    <title>INDEX</title>
     <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript">
 $(document).ready(function(){
    
 });
  </script>
</head>
<body>

<center>
        <table border="4">
        <thead>
        <tr>
            <th><b>NAME</b></th>
            <th><b>IMAGEN</b></th>
            <th><b>MODIFICAR</b></th>
            <th><b>ELIMINAR</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categoriaPlatillos as $categoriaPlatillo)
        <tr>
            <td>{{$categoriaPlatillo->nombre_categoria}}</td>
            
            <td><img style="width:85px; height:85px;" src="{{asset('imag/'.$categoriaPlatillo->imagen)}}"></td>

            <td><a href="{{route('categoriaPlatillo.edit',$categoriaPlatillo)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
            
            <td>
                <form action="{{route('categoriaPlatillo.destroy',$categoriaPlatillo)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Estas seguro de eliminar al la Categoria {{$categoriaPlatillo->nombre_categoria}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
    </table>
</center>

</body>
</html>