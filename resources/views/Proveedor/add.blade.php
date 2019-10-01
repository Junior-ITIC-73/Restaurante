<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Proveedor</title>
</head>
<body>
    <h1>Registra un Proveedor</h1>
        <form method="POST" action="{{url('proveedor')}}">
            {{ csrf_field() }}
            <div class="form-group ">
                <input type="text" id="razon_social" name="razon_social"> Razon Social
                <br>
                <input type="text" id="RFC" name="RFC"> RFC 
                <br>
                <input type="text" id="telefono_proveedor" name="telefono_proveedor"> Telefono
                <br>
                <input type="text" id="calle" name="calle"> Calle
                <br>
                <input type="text" id="num_interior" name="num_interior"> Numero interior
                <br>
                <input type="text" id="num_exterior" name="num_exterior"> Numero exterior
                <br>
                <input type="text" id="CP" name="CP"> Codigo postal
                <br>
                <input type="text" id="localidad" name="localidad"> Localidad
                <br>
                <input type="submit">
            </div>
        </form>
            <script>
                let inputRazonSocial = document.querySelector('#razon_social');
                let patronRazonSocial = /[a-zA-Z+\s]+/;
                validar(inputRazonSocial,patronRazonSocial,'razon_social');


                let inputRfc = document.querySelector('#RFC');
                let patronRfc = /[a-zA-Z+\s0-9\/]+/;
                validar(inputRfc,patronRfc,'RFC');


                let inputTelefonoProveedor = document.querySelector('#telefono_proveedor');
                let patronTelefonoProveedor = /[0-9\/]+/;
                validar(inputTelefonoProveedor,patronTelefonoProveedor,'telefono_proveedor');


                let inputCalle = document.querySelector('#calle');
                let patronCalle = /[a-zA-Z+_\s]+/;
                validar(inputCalle,patronCalle,'calle');

                let inputNumeroInterior = document.querySelector('#num_interior');
                let patronNumeroInterior = /[0-9\/]+/;
                validar(inputNumeroInterior,patronNumeroInterior,'num_interior');

                let inputNumeroExterior = document.querySelector('#num_exterior');
                let patronNumeroExterior = /[0-9\/]+/;
                validar(inputNumeroExterior,patronNumeroExterior,'num_exterior');

                let inputCodigoPostal = document.querySelector('#CP');
                let patronCodigoPostal = /[0-9\/]+/;
                validar(inputCodigoPostal,patronCodigoPostal,'CP');

                let inputLocalidad = document.querySelector('#localidad');
                let patronLocalidad = /[a-zA-Z+_\s]+/;
                validar(inputLocalidad,patronLocalidad,'localidad');



                function validar(input,patron,idInput){
                    input.addEventListener('keydown', event => {
                        if(!patron.test(event.key)) {
                            document.getElementById(idInput).style.border = '1px solid #FF0000';
                        }else{
                            document.getElementById(idInput).style.border = '1px solid #00cc00';
                        }
                    });	

                }

            </script>
</body>
</html>